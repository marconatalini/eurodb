<?php

namespace App\Controller;

use App\Entity\TbOrdinila;
use App\Repository\TbAvanzamentoRepository;
use App\Repository\TbOrdinilaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
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
                'title' => 'Lavori finiti oggi',
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
}
