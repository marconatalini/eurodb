<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 18/04/2020
 * Time: 14:04
 */

namespace App\Controller;


use App\Entity\TbNc;
use App\Entity\TbNciOrdini;
use App\Entity\TbNciVerniciatura;
use App\Entity\TbOrdinila;
use App\Repository\TbNcRepository;
use App\Repository\TbOrdinilaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class NcController
 * @package App\Controller
 * @Route("/nc")
 */
class NcController extends AbstractController
{
    /**
     * @Route("/ordine", name="nc_ordine", methods={"POST"})
     */
    public function nciOrdine(Request $request, TbNcRepository $tbNcRepository)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');

        $nco = new TbNciOrdini();
        $nc = new TbNc();

        $nco->setNumeroOrdine($request->get('numero_ordine'));
        $nco->setLottoOrdine($request->get('lotto_ordine'));
        $ordine_lotto = "{$request->get('numero_ordine')}_{$request->get('lotto_ordine')}";
        $nco->setCodOperatore($request->get('cod_operatore'));
        $nco->setErrorein($request->get('errorein'));
        $nco->setPrelievoProfiliErrati($request->get('prelievo_profili_errati'));
        $nco->setPrelievoMancanzaBarre($request->get('prelievo_mancanza_barre'));
        $nco->setPrelievoQualitaEstruso($request->get('prelievo_qualita_estruso'));
        $nco->setTaglioBarreDifettose($request->get('taglio_barre_difettose'));
        $nco->setTaglioDocumentiInsufficienti($request->get('taglio_documenti_insufficienti'));
        $nco->setLavorazioniErroreTaglio($request->get('lavorazioni_errore_taglio'));
        $nco->setLavorazioniDifettiQualita($request->get('lavorazioni_difetti_qualita'));
        $nco->setLavorazioniErroreSviluppo($request->get('lavorazioni_errore_sviluppo'));
        $nco->setGuarnizioniPezziMancanti($request->get('guarnizioni_pezzi_mancanti'));
        $nco->setGuarnizioniDifettiQualita($request->get('guarnizioni_difetti_qualita'));
        $nco->setImballoPezziMancanti($request->get('imballo_pezzi_mancanti'));
        $nco->setImballoAltro($request->get('imballo_altro'));
        $nco->setVerniciaturaErroreColore($request->get('verniciatura_errore_colore'));
        $nco->setVerniciaturaBucciato($request->get('verniciatura_bucciato'));
        $nco->setVerniciaturaMacchie($request->get('verniciatura_macchie'));
        $nco->setVerniciaturaProfiliAmmaccati($request->get('verniciatura_profili_ammaccati'));
        $nco->setVerniciaturaGraffi($request->get('verniciatura_graffi'));
        $nco->setVerniciaturaAloni($request->get('verniciatura_aloni'));
        $nco->setVerniciaturaAltro($request->get('verniciatura_altro'));
        $nco->setVerniciaturaScarsaPolvere($request->get('verniciatura_scarsa_polvere'));
        $nco->setVerniciaturaImpurita($request->get('verniciatura_impurita'));
        $nco->setControlliProfiliErrati($request->get('controlli_profili_errati'));
        $nco->setControlliDimensioniErrate($request->get('controlli_dimensioni_errate'));
        $nco->setControlliAltro($request->get('controlli_altro'));
        $nco->setNoteNci($request->get('note_nci'));
        $nco->setSoluzione($request->get('soluzione'));
        $nco->setDataSoluzione(new \DateTime($request->get('data_soluzione')));
        $nco->setChiusa($request->get('chiusa'));

        $nc->setNumeronc($tbNcRepository->findMaxNumero('I'));
        $nc->setNumeroordine($ordine_lotto);
        $nc->setRilevatore($tbNcRepository->findNomeRilevatore($nco->getCodOperatore()));
        $nc->setXcodic($tbNcRepository->findXcodic($nco->getNumeroOrdine(), $nco->getLottoOrdine()));
        $nc->setMercato('EU');

        switch (substr($ordine_lotto, 0,1)){
            case '8':
                $nc->setMercato('BP');
                break;
            case '5':
                $nc->setMercato('PE');
                break;
        }

        $nc->setOrdinelotto($ordine_lotto);
        $nc->setNumeroordine($nco->getNumeroOrdine());
        $nc->setLottoOrdine($nco->getLottoOrdine());
        $nc->setDescrizione("[{$nco->getCodOperatore()}]:{$nco->getNoteNci()}");
        $nc->setRi('I');
        $nc->setSoluzione($nco->getSoluzione());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($nc);
        $entityManager->flush();

        $nco->setIdNc($nc->getIdNc());

        $entityManager->persist($nco);
        $entityManager->flush();

        $response->setContent("NC ordine inviata.");

        return $response;
    }

    /**
     * @Route("/verniciatura", name="nc_verniciatura", methods={"POST"})
     */
    public function nciVerniciatura(Request $request, TbNcRepository $tbNcRepository)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');

        $ncv = new TbNciVerniciatura();
        $nc = new TbNc();

        $ncv->setLottoOrdine($request->get('lotto_ordine'));
        $ncv->setNumeroOrdine($request->get('numero_ordine'));
        $ordine_lotto = "{$request->get('numero_ordine')}_{$request->get('lotto_ordine')}";
        $ncv->setChiusa($request->get('chiusa'));
        $ncv->setCodAgganciatore1($request->get('cod_agganciatore1'));
        $ncv->setCodAgganciatore2($request->get('cod_agganciatore2'));
        $ncv->setCodAgganciatore3($request->get('cod_agganciatore3'));
        $ncv->setCodOperatore($request->get('cod_operatore'));
        $ncv->setCodVerniciatore1($request->get('cod_verniciatore1'));
        $ncv->setCodVerniciatore2($request->get('cod_verniciatore2'));
        $ncv->setCodVerniciatore3($request->get('cod_verniciatore3'));
        $ncv->setDataSoluzione(new \DateTime($request->get('data_soluzione')));
        $ncv->setDataoraVerniciatura(new \DateTime($request->get('dataora_verniciatura')));
        $ncv->setDeLevigatura($request->get('de_levigatura'));
        $ncv->setDeMancanzaFori($request->get('de_mancanza_fori'));
        $ncv->setDeProfiliAmmaccati($request->get('de_profili_ammaccati'));
        $ncv->setDeProfiliDeformati($request->get('de_profili_deformati'));
        $ncv->setDeProfiliErrati($request->get('de_profili_errati'));
        $ncv->setDifettoBarre($request->get('difetto_barre'));
        $ncv->setDifettoBugne($request->get('difetto_bugne'));
        $ncv->setDifettoComplementari($request->get('difetto_complementari'));
        $ncv->setDifettoin($request->get('difettoin'));
        $ncv->setDifettoLamiere($request->get('difetto_lamiere'));
        $ncv->setDifettoTelai($request->get('difetto_telai'));
        $ncv->setDuAloni($request->get('du_aloni'));
        $ncv->setDuAltro($request->get('du_altro'));
        $ncv->setDuAngoloInternoNonVerniciato($request->get('du_angolo_interno_non_verniciato'));
        $ncv->setDuBolleVernice($request->get('du_bolle_vernice'));
        $ncv->setDuBucciato($request->get('du_bucciato'));
        $ncv->setDuCaduteImpianto($request->get('du_cadute_impianto'));
        $ncv->setDuCavaTelaioNonVerniciata($request->get('du_cava_telaio_non_verniciata'));
        $ncv->setDuCrateri($request->get('du_crateri'));
        $ncv->setDuErroreColore($request->get('du_errore_colore'));
        $ncv->setDuGraffi($request->get('du_graffi'));
        $ncv->setDuImpurita($request->get('du_impurita'));
        $ncv->setDuMacchieAcqua($request->get('du_macchie_acqua'));
        $ncv->setDuOcchiPernice($request->get('du_occhi_pernice'));
        $ncv->setDuPunteSpillo($request->get('du_punte_spillo'));
        $ncv->setDuScarsaPolvere($request->get('du_scarsa_polvere'));
        $ncv->setDuTracceSilicone($request->get('du_tracce_silicone'));
        $ncv->setDuTroppaPolvere($request->get('du_troppa_polvere'));
        $ncv->setMarcaPolvere($request->get('marca_polvere'));
        $ncv->setNoteNci($request->get('note_nci'));
        $ncv->setSoluzione($request->get('soluzione'));
        $ncv->setXcdcol($request->get('xcdcol'));


        $nc->setNumeronc($tbNcRepository->findMaxNumero('V'));
        $nc->setNumeroordine($ordine_lotto);
        $nc->setRilevatore($tbNcRepository->findNomeRilevatore($ncv->getCodOperatore()));
        $nc->setXcodic($tbNcRepository->findXcodic($ncv->getNumeroOrdine(), $ncv->getLottoOrdine()));
        $nc->setMercato('EU');

        switch (substr($ordine_lotto, 0,1)){
            case '8':
                $nc->setMercato('BP');
                break;
            case '5':
                $nc->setMercato('PE');
                break;
        }

        $nc->setOrdinelotto($ordine_lotto);
        $nc->setNumeroordine($ncv->getNumeroOrdine());
        $nc->setLottoOrdine($ncv->getLottoOrdine());
        $nc->setDescrizione("[{$ncv->getCodOperatore()}]:{$ncv->getNoteNci()}");
        $nc->setRi('V');
        $nc->setSoluzione($ncv->getSoluzione());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($nc);
        $entityManager->flush();

        $ncv->setIdNc($nc->getIdNc());

        $entityManager->persist($ncv);
        $entityManager->flush();

        $response->setContent("NC verniciatura inviata.");

        return $response;
    }

    /**
     * @Route("/colore/{numero<\d+>}/{lotto<[0-9A-Z]>}", name="eurostep_colore")
     */
    public function colore($numero, $lotto, TbOrdinilaRepository $tbOrdinilaRepository)
    {
        /** @var  TbOrdinila $ordinela */
        $ordinela = $tbOrdinilaRepository->findOneBy([
            'numero' => $numero,
            'lotto' => $lotto,
        ]);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');

//        $response->setContent("{$ordinela->getXcdcol()};");
//        return $response;

        if ($ordinela !== null && $ordinela->getXcdcol() !== null ){
            if ($ordinela->getXdecol() !== null) {
                $response->setContent("{$ordinela->getXcdcol()};{$ordinela->getXdecol()}");
            } else {
                $response->setContent("{$ordinela->getXcdcol()};{$ordinela->getFinitura()}");
            }
        } else {
            $response->setContent("Colore ordine {$numero}_{$lotto} non trovato. Chiama Marco (156)");
        }


        return $response;
    }

    /**
     * @Route("/foto/upload/{categoryId<\d+>}", name="nc_foto_upload")
     */
    public function fotoUpload(Request $request, $categoryId)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/plain');
        $response->setContent($request->get('soluzione'));

        return $this->json($request->query->all());

//        return $this->redirect("http://eurostock.locale/image/upload");
    }
}
