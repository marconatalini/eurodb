<?php

namespace App\Controller;

use App\Entity\TbAvanzamento;
use App\Entity\TbDescrizioniFasiProduzione;
use App\Entity\TbDipendenti;
use App\Entity\TbLog;
use App\Entity\TbOrdinila;
use App\Repository\TbAvanzamentoRepository;
use App\Repository\TbDescrizioniFasiProduzioneRepository;
use App\Repository\TbDipendentiRepository;
use App\Repository\TbLogRepository;
use App\Repository\TbOrdinilaRepository;
use AssertionError;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class EurostepController extends AbstractController
{
    private $serializer;
    private $logRepository;

    public function __construct(TbLogRepository $tbLogRepository)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
        $this->logRepository = $tbLogRepository;
    }

    /**
     * @Route("/eurostep", defaults={"page": "1", "_format"="html"}, methods={"GET"}, name="eurostep_index")
     * @Route("/eurostep/page/{page<[1-9]\d*>}", defaults={"_format"="html"}, methods={"GET"}, name="eurostep_index_paginated")
     */
    public function index(Request $request, int $page, TbAvanzamentoRepository $avanzamentoRepository, TbDescrizioniFasiProduzioneRepository $fasiProduzioneRepository)
    {
        if (0 === $request->query->count()) {
            return $this->render('eurostep/index.html.twig',[
                'lavorazioni' => $fasiProduzioneRepository->findAll(),
            ]);
        }

        $codiceFase = $request->get("codiceFase", null);
        $registerDate = $request->get("registerDate", null);
        if (!$registerDate) {
//            $registerDate = date('Y-m-d', date_timestamp_get(new \DateTime('-3  months')));
            $registerDate = date('Y-m-d', date_timestamp_get(new \DateTime('today')));
        }

        $result = $avanzamentoRepository->findBySearch($page, $registerDate, $codiceFase);

        return $this->render('eurostep/live.html.twig', [
            'paginator' => $result,
        ]);
    }

    /**
     * @Route("/eurostep/live", name="eurostep_live")
     */
    public function live(TbAvanzamentoRepository $tbAvanzamentoRepository)
    {

        return $this->render('eurostep/live.html.twig',[
            'paginator' => $tbAvanzamentoRepository->findRegistrazioniOggi()
        ]);
    }

    /**
     * @Route("/login/{codice}", name="eurostep_login")
     */
    public function login($codice, Request $request, TbDipendentiRepository $tbDipendentiRepository)
    {
        $appversion = $request->get('appversion');
        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');

        if ($appversion < 7) {
            $response->setContent('Update');
            return $response;
        }

        /*$ip = getenv('HTTP_CLIENT_IP')?:
            getenv('HTTP_X_FORWARDED_FOR')?:
                getenv('HTTP_X_FORWARDED')?:
                    getenv('HTTP_FORWARDED_FOR')?:
                        getenv('HTTP_FORWARDED')?:
                            getenv('REMOTE_ADDR');*/

        $dipendente = $tbDipendentiRepository->findOneBy([
            'idDipendente' => $codice
        ]);

//        $em = $this->getDoctrine()->getManager();
//        $log = new TbLog();

        if ($dipendente !== null){ //login
            $response->setContent("{$dipendente->getIdDipendente()} {$dipendente->getDescrizione()}");
        } else { //logfail
            $response->setContent($codice);
        }

//        $em->persist($log);
//        $em->flush();

        return $response;

    }

    /**
     * @Route("/dettaglio/{numero<\d+>}/{lotto<[0-9A-Z]>}", name="eurostep_ordineLA")
     */
    public function ordine($numero, $lotto, TbOrdinilaRepository $tbOrdinilaRepository)
    {
        /** @var  TbOrdinila $ordinela */
        $ordinela = $tbOrdinilaRepository->findOneBy([
            'numero' => $numero,
            'lotto' => $lotto,
        ]);

        if ($ordinela !== null) {
            return $this->JSONresponse($ordinela);
        }

        return new Response("Ordine {$numero}_{$lotto} non trovato.", Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("/avanzamento/{numero<\d+>}/{lotto<[0-9A-Z]>}", name="eurostep_avanzamento")
     */
    public function avanzamento($numero, $lotto, TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $steps = $tbAvanzamentoRepository->findRegistrazioniOrdine($numero, $lotto);

        if ($steps !== null) {
            return $this->JSONresponse($steps);
        }

        return new Response("Ordine {$numero}_{$lotto} non trovato.", Response::HTTP_NOT_FOUND);
    }


    /**
     * @Route("/registrazioni/{operatore}", name="eurostep_dati_inviati")
     */
    public function registrazioni($operatore, TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $result = $tbAvanzamentoRepository->findRegistrazioniOggiOperatore($operatore);

        if ($result !== null)
        {
            return $this->JSONresponse($result);
        }

        return new Response("Nessuna registrazione di oggi trovata per operatore {$operatore}", Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("/ordiniCianfrinatura", name="eurostep_ordini_cianfrinatura")
     */
    public function cianfrinatura(TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $result = $tbAvanzamentoRepository->findOrdiniCianfrinatura();

        if ($result !== null)
        {
            return $this->JSONresponse($result);
        }

        return new Response("Nessun ordine da cianfrinare.", Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("/ordiniCNC", name="eurostep_ordini_cnc")
     */
    public function cnc(TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $result = $tbAvanzamentoRepository->findOrdiniCNC();

        if ($result !== null)
        {
            return $this->JSONresponse($result);
        }

        return new Response("Nessun ordine per centri di lavoro.", Response::HTTP_NOT_FOUND);
    }

    /**
     * @Route("/ordiniVerniciatura", name="eurostep_ordini_verniciatura")
     */
    public function verniciatura(TbAvanzamentoRepository $tbAvanzamentoRepository)
    {
        $result = $tbAvanzamentoRepository->findOrdiniVerniciatura();

        if ($result !== null)
        {
            return $this->JSONresponse($result);
        }

        return new Response("Nessun ordine da verniciare.", Response::HTTP_NOT_FOUND);
    }


    /**
     * @Route("/online/{operatore}/{fase}", name="eurostep_online")
     */
    public function online(Request $request, TbDipendenti $operatore, TbDescrizioniFasiProduzione $fase, PublisherInterface $publisher, TbAvanzamentoRepository $avanzamentoRepository)
    {
//        /online/I0056/S3?ordine_lotto=862388_0&operatore=I0056&seconds=0&bilancelle=2.3&carrello=xxx

        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');

        //read parameters
        $secondi = $request->get('seconds', 0);
        list($ordine, $lotto) = explode('_', $request->get('ordine_lotto'));

        try {
            $step = new TbAvanzamento();

            $step->setCodiceFase($fase);
            $step->setCodiceOperatore($operatore);
            $step->setNumeroOrdine($ordine);
            $step->setLottoOrdine($lotto);
            $step->setSecondi($secondi);
            if ($secondi > 0){
                $step->setInizioFine(true);
            }
            $step->setBilancelle($request->get('bilancelle', 0));
            $step->setCarrello($request->get('carrello', null));


            $response->setContent("Registrato ordine {$ordine}_{$lotto}");

            //dati dalla memoria telefono
            $timestamp = $request->get("registrato_il");
            if ($timestamp !== null){
                $step->setTimestamp(new \DateTime($timestamp));
                $response->setContent("Memoria OK: {$ordine}_{$lotto}");
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($step);
            $em->flush();

            $response->setStatusCode(Response::HTTP_OK);

            try {
                $update = new Update('http://eurodb.europrofili.locale/eurostep/',
                    $this->serializer->serialize($step, 'json'));

                $live = $_ENV['MERCURE_LIVE_OK'];
                if ($live === "true") {
                    $publisher($update);
                }

            } catch (\Exception $e) {
                $response->setContent($response->getContent() . "\nErrore publisher: " . substr($e,0,50));
            }

        } catch (AssertionError $e) {
            $response->setContent($e);
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $response;
    }


    private function JSONresponse($object)
    {
        $response = new Response();
        $response->setContent($this->serializer->serialize($object, 'json'));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }
}
