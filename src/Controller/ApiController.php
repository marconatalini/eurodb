<?php

namespace App\Controller;

use App\Entity\TbAnagraficaCliente;
use App\Entity\TbEurostepErrorLog;
use App\Entity\TbOrdini;
use App\Entity\TbOrdinila;
use App\Repository\TbAvanzamentoRepository;
use App\Repository\TbEurostepErrorLogRepository;
use App\Repository\TbOrdinilaRepository;
use App\Repository\TbOrdiniRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/update", name="app_update")
     */
    public function update()
    {
        // load the file from the filesystem
        $file = new File('app/eurostep.apk');

        return $this->file($file);

    }

    /**
     * @Route("/registrazioni/{operatore}", name="app_dati_inviati")
     */
    public function registrazioni($operatore, TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $result = $tbAvanzamentoRepository->findRegistrazioniOggiOperatore($operatore);

        if ($result !== null) {
//            dd($result);
            return $this->render('api/datiInviati.html.twig', [
                'title' => 'Registrazioni di oggi',
                'result' => $result,
            ]);
        }

        return new Response("Nessuna registrazione di oggi trovata per operatore {$operatore}", Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("/listaordini/{reparto}", name="app_ordini_cianfrinatura")
     */
    public function listaOrdini($reparto, TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $result = null;
        $title = "";

        switch ($reparto) {
            case "cianfrinatura":
                $result = $tbAvanzamentoRepository->findOrdiniCianfrinatura();
                $title = "Ordini da cianfrinare";
                break;
            case "verniciatura":
                $result = $tbAvanzamentoRepository->findOrdiniVerniciatura();
                $title = "Ordini da verniciare";
                break;
            case "cnc":
                $result = $tbAvanzamentoRepository->findOrdiniCNC();
                $title = "Ordini per CNC";
                break;
        }

        if ($result !== null) {
//            dd($result);
            return $this->render('api/listaordini.html.twig', [
                'title' => $title,
                'result' => $result,
            ]);
        }

        return new Response("Nessun ordine da cianfrinare.", Response::HTTP_NOT_FOUND);
    }


    /**
     * @Route("/cliente/{numero<\d+>}/{lotto<[0-9A-Z]>}", name="app_getClienteOrdine")
     */
    public function getClienteOrdine($numero, $lotto, TbOrdinilaRepository $repository, TbOrdiniRepository $ordiniRepository){

        $response = new Response();

        /** @var  TbOrdinila $ordinela */
        $ordinela = $repository->findOneBy([
            'numero' => $numero,
            'lotto' => $lotto,
        ]);

        if ($ordinela != null) {
            $response->setContent($ordinela->getXragsoc());
            return $response;
        } else {
            /** @var  TbAnagraficaCliente $ordinePe */
            $ordinePe = $ordiniRepository->getCliente($numero, $lotto);
            if ($ordinePe != null){
//                dd($ordinePe);
                $response->setContent($ordinePe[0]['xdsana']);
                return $response;
            }
        }

        return new Response("Ordine NON trovato", Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @Route("/dettaglio/{numero<\d+>}/{lotto<[0-9A-Z]>}", name="app_ordineLA")
     */
    public function ordine($numero, $lotto, TbOrdinilaRepository $tbOrdinilaRepository, TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        /** @var  TbOrdinila $ordinela */
        $ordinela = $tbOrdinilaRepository->findOneBy([
            'numero' => $numero,
            'lotto' => $lotto,
        ]);

        $steps = $tbAvanzamentoRepository->findBy([
            'numeroOrdine' => $numero,
            'lottoOrdine' => $lotto,
        ]);

//        dd($ordinela, $steps);

        return $this->render('api/ordineLA.html.twig', [
            'title' => "Dettagli",
            'ordine' => $ordinela,
            'steps' => $steps
        ]);
    }

    /**
     * @Route("/errorlog",  name="app_error_log")
     */
    public function errorLog(Request $request){

        $stacktrace = $request->get('stacktrace');

        if ($stacktrace !== null){
            $log = new TbEurostepErrorLog();

            $log->setStacktrace($stacktrace);

            $em = $this->getDoctrine()->getManager();
            $em->persist($log);
            $em->flush();

            $response = new Response();
            $response->headers->set('Content-Type', 'text/plain');
            $response->setContent("Errore inviato: grazie.");

            return $response;

        } else {
            return new Response("Errore non registrato, riprova.", Response::HTTP_NOT_FOUND);
        }

    }

    /**
     * @Route("/errori",  name="app_errori")
     */
    public function errori(TbEurostepErrorLogRepository $repository){

        $result = $repository->getErroriOggi();

        return $this->render("api/logErrori.html.twig", [
            'title' => "Ultimi errori APP Eurostep",
            'result' => $result,
        ]);
    }

    /**
     * @Route("/note/{numero<\d+>}/{lotto<[0-9A-Z]>}", name="app_note_avanzamento")
     */
    public function get_note_avazamento($numero, $lotto, TbAvanzamentoRepository $tbAvanzamentoRepository){

        $steps = $tbAvanzamentoRepository->findNoteOrdine($numero, $lotto);

//        dd($steps, $numero, $lotto);

        $response = new JsonResponse($steps);

        return $response;

    }

}
