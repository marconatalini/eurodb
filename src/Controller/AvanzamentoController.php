<?php

namespace App\Controller;

use App\Entity\TbAvanzamento;
use App\Form\StepType;
use App\Repository\TbAvanzamentoRepository;
use App\Repository\TbDescrizioniFasiProduzioneRepository;
use App\Repository\TbDipendentiRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avanzamento")
 */
class AvanzamentoController extends AbstractController
{
    /**
     * @var PaginatorInterface
     */
    private $paginator;
    /**
     * @var TbAvanzamentoRepository
     */
    private $avanzamentoRepository;

    public function __construct(PaginatorInterface $paginator, TbAvanzamentoRepository $avanzamentoRepository)
    {
        $this->paginator = $paginator;
        $this->avanzamentoRepository = $avanzamentoRepository;
    }


    /**
     * @Route("/", name="avanzamento_index")
     */
    public function index(Request $request,
                          TbDipendentiRepository $dipendentiRepository,
                          TbDescrizioniFasiProduzioneRepository $fasiProduzioneRepository)
    {


        if (0 === $request->query->count()) {
            return $this->render('avanzamento/search.html.twig', [
                'dipendenti' => $dipendentiRepository->findAll(),
                'lavorazioni' => $fasiProduzioneRepository->findAll(),
            ]);
        }

        $dipendente = null;
        if ($request->query->has('operatore')) {
            $dipendente = $dipendentiRepository->find($request->get("operatore"));
        }

        $lavorazione = null;
        if ($request->query->has('lavorazione')) {
            $lavorazione = $fasiProduzioneRepository->find($request->get("lavorazione"));
        }

        $dateFrom = $request->get("fromDate", null);
        if (!$dateFrom) {
            $dateFrom = date('Y-m-d', date_timestamp_get(new \DateTime('-3  months')));
        }

        $dateTo = $request->get("toDate", null);
        if (!$dateTo) {
            $dateTo = date('Y-m-d', date_timestamp_get(new \DateTime('now')));
        }

        $numero = $request->get("numero", null);
        $lotto = $request->get("lotto", null);
        $stepsQbuilder = $this->avanzamentoRepository->findBySearchQueryBuilder(
            $dateFrom, $dateTo, $dipendente, $lavorazione,
            $numero, $lotto
        );

        $pagination = $this->paginator->paginate(
            $stepsQbuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            30/*limit per page*/
        );

        return $this->render('avanzamento/index.html.twig',[
            'steps' => $pagination,
        ]);
    }

    /**
     * @Route("/delete/{idAvanzamento}", name="avanzamento_delete")
     * @IsGranted("ROLE_AVANZAMENTO_ADMIN")
     */
    public function delete(TbAvanzamento $avanzamento, Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($avanzamento);
        $entityManager->flush();

        $this->addFlash('danger', sprintf("Hai cancellato la registrazione %s.", $avanzamento));

        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @Route("/edit/{idAvanzamento}", name="avanzamento_edit")
     * @IsGranted("ROLE_AVANZAMENTO_ADMIN")
     */
    public function edit(TbAvanzamento $avanzamento, Request $request)
    {

        $form = $this->createForm(StepType::class, $avanzamento);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $avanzamento = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avanzamento);
            $entityManager->flush();

            if ($request->getSession()->has('editFrom')) {
                $tempUrl = $request->getSession()->get('editFrom');
                $request->getSession()->remove('editFrom');
                return $this->redirect($tempUrl);
            }

            return $this->redirectToRoute('avanzamento_index_live');
        }

        $request->getSession()->set('editFrom', $request->headers->get('referer'));

        return $this->render('avanzamento/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/live", name="avanzamento_index_live")
     */
    public function live(Request $request)
    {

        $stepsQbuilder = $this->avanzamentoRepository->findRegistrazioniOggiQueryBuilder();

        $pagination = $this->paginator->paginate(
            $stepsQbuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            30/*limit per page*/
        );

        return $this->render('avanzamento/index.html.twig',[
            'steps' => $pagination,
            'livemode' => true,
        ]);
    }

    /**
     * @Route("/timechart/{numero}_{lotto}", name="avanzamento_timechart")
     */
    public function timechart($numero, $lotto)
    {
        $result = $this->avanzamentoRepository->findTempiOrdine($numero, $lotto);

        return $this->render('avanzamento/timeDetail.html.twig', [
            'numero' => $numero,
            'lotto' => $lotto,
            'tempi' => $result,
            'labels' => array_column($result, 'descrizione'),
            'dataset' => array_column($result, 'secondiSum'),
        ]);
    }
}
