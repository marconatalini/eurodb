<?php

namespace App\Controller;

use App\Entity\TbOrdini;
use App\Entity\TbOrdinila;
use App\Repository\TbOrdinilaRepository;
use App\Repository\TbOrdiniRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ordine")
 */
class OrdineController extends AbstractController
{
    const ORDINE_LA = 800000;
    const ORDINE_PE = 500000;
    /**
     * @var TbOrdiniRepository
     */
    private $ordiniRepository;
    /**
     * @var TbOrdinilaRepository
     */
    private $ordinilaRepository;

    private function getOrdine($numero, $lotto)
    {
        if (intval(substr($numero,0,8)) >= $this::ORDINE_LA) {
            return $this->ordinilaRepository->findOneBy([
                'numero' => $numero,
                'lotto' => $lotto,
            ]);
        }

        return $this->ordiniRepository->findOneBy([
            'ordine' => sprintf("%s_%s", $numero, $lotto)
        ]);

    }

    public function __construct(TbOrdiniRepository $ordiniRepository, TbOrdinilaRepository $ordinilaRepository)
    {
        $this->ordiniRepository = $ordiniRepository;
        $this->ordinilaRepository = $ordinilaRepository;
    }


    /**
     * @Route("/dettaglio/{numero}_{lotto}", name="ordine_dettaglio")
     */
    public function detail($numero, $lotto)
    {
        $ordine = $this->getOrdine($numero, $lotto);

        if ($ordine->getMercato() == 'LA') {
            /** @var TbOrdinila ordine */
            return $this->render('ordine/_detail_la.html.twig', [
                'ordine' => $ordine
            ]);
        }

        /** @var TbOrdini ordine */
        return $this->render('ordine/_detail_pe.html.twig', [
            'ordine' => $ordine
        ]);
    }


}
