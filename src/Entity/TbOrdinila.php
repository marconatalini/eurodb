<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrdinila
 *
 * @ORM\Table(name="tb_ordinila")
 * @ORM\Entity
 */
class TbOrdinila
{

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ordine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lotto", type="string", length=1, nullable=true)
     */
    private $lotto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xcodic", type="string", length=6, nullable=true)
     */
    private $xcodic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xragsoc", type="string", length=50, nullable=true)
     */
    private $xragsoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xcodic_destinatario", type="string", length=6, nullable=true)
     */
    private $xcodicDestinatario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="causale_ordine", type="string", length=4, nullable=true)
     */
    private $causaleOrdine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_ordine", type="datetime", nullable=true)
     */
    private $dataOrdine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_consegna_richiesta", type="datetime", nullable=true)
     */
    private $dataConsegnaRichiesta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_sviluppo", type="datetime", nullable=true)
     */
    private $dataSviluppo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_invio_conferma", type="datetime", nullable=true)
     */
    private $dataInvioConferma;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_invio_ultima_conferma", type="datetime", nullable=true)
     */
    private $dataInvioUltimaConferma;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="numero_conferme_inviate", type="boolean", nullable=true)
     */
    private $numeroConfermeInviate = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="numero_solleciti", type="boolean", nullable=true)
     */
    private $numeroSolleciti = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_confermato", type="datetime", nullable=true)
     */
    private $dataConfermato;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_approntamento", type="datetime", nullable=true)
     */
    private $dataApprontamento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_primo_approntamento", type="datetime", nullable=true)
     */
    private $dataPrimoApprontamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_giorni_calcolati", type="integer", nullable=true)
     */
    private $nGiorniCalcolati = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_approntamento_calcolato", type="datetime", nullable=true)
     */
    private $dataApprontamentoCalcolato;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_stampe_tecniche", type="datetime", nullable=true)
     */
    private $dataStampeTecniche;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_scadenza_produzione", type="datetime", nullable=true)
     */
    private $dataScadenzaProduzione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scp", type="string", length=1, nullable=true)
     */
    private $scp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finitura", type="string", length=100, nullable=true)
     */
    private $finitura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="riferimento", type="string", length=255, nullable=true)
     */
    private $riferimento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_cornici", type="integer", nullable=true )
     */
    private $nCornici = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_fsq", type="integer", nullable=true)
     */
    private $nFsq = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_lamiere", type="integer", nullable=true)
     */
    private $nLamiere = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_zanzariere", type="integer", nullable=true)
     */
    private $nZanzariere = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_monoblocchi", type="integer", nullable=true)
     */
    private $nMonoblocchi = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_lavorazioni_CNC", type="integer", nullable=true)
     */
    private $nLavorazioniCnc = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_pannelli", type="integer", nullable=true)
     */
    private $nPannelli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_bugne", type="integer", nullable=true)
     */
    private $nBugne = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_archi", type="integer", nullable=true)
     */
    private $nArchi = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="arci", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $arci = 'b\'0\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="arce", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $arce = 'b\'0\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_complementari", type="smallint", nullable=true)
     */
    private $nComplementari = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="mt_complementari", type="float", precision=10, scale=0, nullable=true)
     */
    private $mtComplementari = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_angoli45", type="integer", nullable=true)
     */
    private $nAngoli45 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_angoli90", type="integer", nullable=true)
     */
    private $nAngoli90 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_tagli", type="integer", nullable=true)
     */
    private $nTagli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_montaggi", type="integer", nullable=true)
     */
    private $nMontaggi = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="aggiornamento", type="datetime", nullable=true)
     */
    private $aggiornamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_veneziane", type="integer", nullable=true)
     */
    private $nVeneziane = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_annullato", type="datetime", nullable=true)
     */
    private $dataAnnullato;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tecnico", type="string", length=30, nullable=true)
     */
    private $tecnico;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xcdcol", type="string", length=6, nullable=true)
     */
    private $xcdcol;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_ultimo_sollecito", type="datetime", nullable=true)
     */
    private $dataUltimoSollecito;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=16777215, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_finito", type="datetime", nullable=true)
     */
    private $dataFinito;

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_giorni_totali", type="integer", nullable=true)
     */
    private $nGiorniTotali = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_giorni_diff_consegna", type="integer", nullable=true)
     */
    private $nGiorniDiffConsegna = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_prod_gt", type="datetime", nullable=true)
     */
    private $dataProdGt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_prod_accessori", type="datetime", nullable=true)
     */
    private $dataProdAccessori;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="n_giorni_posticipo", type="integer", nullable=true)
     */
    private $nGiorniPosticipo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="xdecol", type="string", length=100, nullable=true)
     */
    private $xdecol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mq_totali", type="decimal", precision=5, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mqTotali = '0.00';

    /**
     * @return int
     */
    public function getIdOrdine()
    {
        return $this->idOrdine;
    }

    /**
     * @param int $idOrdine
     */
    public function setIdOrdine($idOrdine)
    {
        $this->idOrdine = $idOrdine;
    }

    /**
     * @return int|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param int|null $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return null|string
     */
    public function getLotto()
    {
        return $this->lotto;
    }

    /**
     * @param null|string $lotto
     */
    public function setLotto($lotto)
    {
        $this->lotto = $lotto;
    }

    /**
     * @return null|string
     */
    public function getXcodic()
    {
        return $this->xcodic;
    }

    /**
     * @param null|string $xcodic
     */
    public function setXcodic($xcodic)
    {
        $this->xcodic = $xcodic;
    }

    /**
     * @return null|string
     */
    public function getXragsoc()
    {
        return $this->xragsoc;
    }

    /**
     * @param null|string $xragsoc
     */
    public function setXragsoc($xragsoc)
    {
        $this->xragsoc = $xragsoc;
    }

    /**
     * @return null|string
     */
    public function getXcodicDestinatario()
    {
        return $this->xcodicDestinatario;
    }

    /**
     * @param null|string $xcodicDestinatario
     */
    public function setXcodicDestinatario($xcodicDestinatario)
    {
        $this->xcodicDestinatario = $xcodicDestinatario;
    }

    /**
     * @return null|string
     */
    public function getCausaleOrdine()
    {
        return $this->causaleOrdine;
    }

    /**
     * @param null|string $causaleOrdine
     */
    public function setCausaleOrdine($causaleOrdine)
    {
        $this->causaleOrdine = $causaleOrdine;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataOrdine()
    {
        return $this->dataOrdine;
    }

    /**
     * @param \DateTime|null $dataOrdine
     */
    public function setDataOrdine($dataOrdine)
    {
        $this->dataOrdine = $dataOrdine;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataConsegnaRichiesta()
    {
        return $this->dataConsegnaRichiesta;
    }

    /**
     * @param \DateTime|null $dataConsegnaRichiesta
     */
    public function setDataConsegnaRichiesta($dataConsegnaRichiesta)
    {
        $this->dataConsegnaRichiesta = $dataConsegnaRichiesta;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataSviluppo()
    {
        return $this->dataSviluppo;
    }

    /**
     * @param \DateTime|null $dataSviluppo
     */
    public function setDataSviluppo($dataSviluppo)
    {
        $this->dataSviluppo = $dataSviluppo;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataInvioConferma()
    {
        return $this->dataInvioConferma;
    }

    /**
     * @param \DateTime|null $dataInvioConferma
     */
    public function setDataInvioConferma($dataInvioConferma)
    {
        $this->dataInvioConferma = $dataInvioConferma;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataInvioUltimaConferma()
    {
        return $this->dataInvioUltimaConferma;
    }

    /**
     * @param \DateTime|null $dataInvioUltimaConferma
     */
    public function setDataInvioUltimaConferma($dataInvioUltimaConferma)
    {
        $this->dataInvioUltimaConferma = $dataInvioUltimaConferma;
    }

    /**
     * @return bool|null
     */
    public function getNumeroConfermeInviate()
    {
        return $this->numeroConfermeInviate;
    }

    /**
     * @param bool|null $numeroConfermeInviate
     */
    public function setNumeroConfermeInviate($numeroConfermeInviate)
    {
        $this->numeroConfermeInviate = $numeroConfermeInviate;
    }

    /**
     * @return bool|null
     */
    public function getNumeroSolleciti()
    {
        return $this->numeroSolleciti;
    }

    /**
     * @param bool|null $numeroSolleciti
     */
    public function setNumeroSolleciti($numeroSolleciti)
    {
        $this->numeroSolleciti = $numeroSolleciti;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataConfermato()
    {
        return $this->dataConfermato;
    }

    /**
     * @param \DateTime|null $dataConfermato
     */
    public function setDataConfermato($dataConfermato)
    {
        $this->dataConfermato = $dataConfermato;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataApprontamento()
    {
        return $this->dataApprontamento;
    }

    /**
     * @param \DateTime|null $dataApprontamento
     */
    public function setDataApprontamento($dataApprontamento)
    {
        $this->dataApprontamento = $dataApprontamento;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataPrimoApprontamento()
    {
        return $this->dataPrimoApprontamento;
    }

    /**
     * @param \DateTime|null $dataPrimoApprontamento
     */
    public function setDataPrimoApprontamento($dataPrimoApprontamento)
    {
        $this->dataPrimoApprontamento = $dataPrimoApprontamento;
    }

    /**
     * @return int|null
     */
    public function getNGiorniCalcolati()
    {
        return $this->nGiorniCalcolati;
    }

    /**
     * @param int|null $nGiorniCalcolati
     */
    public function setNGiorniCalcolati($nGiorniCalcolati)
    {
        $this->nGiorniCalcolati = $nGiorniCalcolati;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataApprontamentoCalcolato()
    {
        return $this->dataApprontamentoCalcolato;
    }

    /**
     * @param \DateTime|null $dataApprontamentoCalcolato
     */
    public function setDataApprontamentoCalcolato($dataApprontamentoCalcolato)
    {
        $this->dataApprontamentoCalcolato = $dataApprontamentoCalcolato;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataStampeTecniche()
    {
        return $this->dataStampeTecniche;
    }

    /**
     * @param \DateTime|null $dataStampeTecniche
     */
    public function setDataStampeTecniche($dataStampeTecniche)
    {
        $this->dataStampeTecniche = $dataStampeTecniche;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataScadenzaProduzione()
    {
        return $this->dataScadenzaProduzione;
    }

    /**
     * @param \DateTime|null $dataScadenzaProduzione
     */
    public function setDataScadenzaProduzione($dataScadenzaProduzione)
    {
        $this->dataScadenzaProduzione = $dataScadenzaProduzione;
    }

    /**
     * @return null|string
     */
    public function getScp()
    {
        return $this->scp;
    }

    /**
     * @param null|string $scp
     */
    public function setScp($scp)
    {
        $this->scp = $scp;
    }

    /**
     * @return null|string
     */
    public function getFinitura()
    {
        return $this->finitura;
    }

    /**
     * @param null|string $finitura
     */
    public function setFinitura($finitura)
    {
        $this->finitura = $finitura;
    }

    /**
     * @return null|string
     */
    public function getRiferimento()
    {
        return $this->riferimento;
    }

    /**
     * @param null|string $riferimento
     */
    public function setRiferimento($riferimento)
    {
        $this->riferimento = $riferimento;
    }

    /**
     * @return int|null
     */
    public function getNCornici()
    {
        return $this->nCornici;
    }

    /**
     * @param int|null $nCornici
     */
    public function setNCornici($nCornici)
    {
        $this->nCornici = $nCornici;
    }

    /**
     * @return int|null
     */
    public function getNFsq()
    {
        return $this->nFsq;
    }

    /**
     * @param int|null $nFsq
     */
    public function setNFsq($nFsq)
    {
        $this->nFsq = $nFsq;
    }

    /**
     * @return int|null
     */
    public function getNLamiere()
    {
        return $this->nLamiere;
    }

    /**
     * @param int|null $nLamiere
     */
    public function setNLamiere($nLamiere)
    {
        $this->nLamiere = $nLamiere;
    }

    /**
     * @return int|null
     */
    public function getNZanzariere()
    {
        return $this->nZanzariere;
    }

    /**
     * @param int|null $nZanzariere
     */
    public function setNZanzariere($nZanzariere)
    {
        $this->nZanzariere = $nZanzariere;
    }

    /**
     * @return int|null
     */
    public function getNMonoblocchi()
    {
        return $this->nMonoblocchi;
    }

    /**
     * @param int|null $nMonoblocchi
     */
    public function setNMonoblocchi($nMonoblocchi)
    {
        $this->nMonoblocchi = $nMonoblocchi;
    }

    /**
     * @return int|null
     */
    public function getNLavorazioniCnc()
    {
        return $this->nLavorazioniCnc;
    }

    /**
     * @param int|null $nLavorazioniCnc
     */
    public function setNLavorazioniCnc($nLavorazioniCnc)
    {
        $this->nLavorazioniCnc = $nLavorazioniCnc;
    }

    /**
     * @return int|null
     */
    public function getNPannelli()
    {
        return $this->nPannelli;
    }

    /**
     * @param int|null $nPannelli
     */
    public function setNPannelli($nPannelli)
    {
        $this->nPannelli = $nPannelli;
    }

    /**
     * @return int|null
     */
    public function getNBugne()
    {
        return $this->nBugne;
    }

    /**
     * @param int|null $nBugne
     */
    public function setNBugne($nBugne)
    {
        $this->nBugne = $nBugne;
    }

    /**
     * @return int|null
     */
    public function getNArchi()
    {
        return $this->nArchi;
    }

    /**
     * @param int|null $nArchi
     */
    public function setNArchi($nArchi)
    {
        $this->nArchi = $nArchi;
    }

    /**
     * @return bool|null
     */
    public function getArci()
    {
        return $this->arci;
    }

    /**
     * @param bool|null $arci
     */
    public function setArci($arci)
    {
        $this->arci = $arci;
    }

    /**
     * @return bool|null
     */
    public function getArce()
    {
        return $this->arce;
    }

    /**
     * @param bool|null $arce
     */
    public function setArce($arce)
    {
        $this->arce = $arce;
    }

    /**
     * @return int|null
     */
    public function getNComplementari()
    {
        return $this->nComplementari;
    }

    /**
     * @param int|null $nComplementari
     */
    public function setNComplementari($nComplementari)
    {
        $this->nComplementari = $nComplementari;
    }

    /**
     * @return float|null
     */
    public function getMtComplementari()
    {
        return $this->mtComplementari;
    }

    /**
     * @param float|null $mtComplementari
     */
    public function setMtComplementari($mtComplementari)
    {
        $this->mtComplementari = $mtComplementari;
    }

    /**
     * @return int|null
     */
    public function getNAngoli45()
    {
        return $this->nAngoli45;
    }

    /**
     * @param int|null $nAngoli45
     */
    public function setNAngoli45($nAngoli45)
    {
        $this->nAngoli45 = $nAngoli45;
    }

    /**
     * @return int|null
     */
    public function getNAngoli90()
    {
        return $this->nAngoli90;
    }

    /**
     * @param int|null $nAngoli90
     */
    public function setNAngoli90($nAngoli90)
    {
        $this->nAngoli90 = $nAngoli90;
    }

    /**
     * @return int|null
     */
    public function getNTagli()
    {
        return $this->nTagli;
    }

    /**
     * @param int|null $nTagli
     */
    public function setNTagli($nTagli)
    {
        $this->nTagli = $nTagli;
    }

    /**
     * @return int|null
     */
    public function getNMontaggi()
    {
        return $this->nMontaggi;
    }

    /**
     * @param int|null $nMontaggi
     */
    public function setNMontaggi($nMontaggi)
    {
        $this->nMontaggi = $nMontaggi;
    }

    /**
     * @return \DateTime|null
     */
    public function getAggiornamento()
    {
        return $this->aggiornamento;
    }

    /**
     * @param \DateTime|null $aggiornamento
     */
    public function setAggiornamento($aggiornamento)
    {
        $this->aggiornamento = $aggiornamento;
    }

    /**
     * @return int|null
     */
    public function getNVeneziane()
    {
        return $this->nVeneziane;
    }

    /**
     * @param int|null $nVeneziane
     */
    public function setNVeneziane($nVeneziane)
    {
        $this->nVeneziane = $nVeneziane;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataAnnullato()
    {
        return $this->dataAnnullato;
    }

    /**
     * @param \DateTime|null $dataAnnullato
     */
    public function setDataAnnullato($dataAnnullato)
    {
        $this->dataAnnullato = $dataAnnullato;
    }

    /**
     * @return null|string
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * @param null|string $tecnico
     */
    public function setTecnico($tecnico)
    {
        $this->tecnico = $tecnico;
    }

    /**
     * @return null|string
     */
    public function getXcdcol()
    {
        return $this->xcdcol;
    }

    /**
     * @param null|string $xcdcol
     */
    public function setXcdcol($xcdcol)
    {
        $this->xcdcol = $xcdcol;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataUltimoSollecito()
    {
        return $this->dataUltimoSollecito;
    }

    /**
     * @param \DateTime|null $dataUltimoSollecito
     */
    public function setDataUltimoSollecito($dataUltimoSollecito)
    {
        $this->dataUltimoSollecito = $dataUltimoSollecito;
    }

    /**
     * @return null|string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param null|string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataFinito()
    {
        return $this->dataFinito;
    }

    /**
     * @param \DateTime|null $dataFinito
     */
    public function setDataFinito($dataFinito)
    {
        $this->dataFinito = $dataFinito;
    }

    /**
     * @return int|null
     */
    public function getNGiorniTotali()
    {
        return $this->nGiorniTotali;
    }

    /**
     * @param int|null $nGiorniTotali
     */
    public function setNGiorniTotali($nGiorniTotali)
    {
        $this->nGiorniTotali = $nGiorniTotali;
    }

    /**
     * @return int|null
     */
    public function getNGiorniDiffConsegna()
    {
        return $this->nGiorniDiffConsegna;
    }

    /**
     * @param int|null $nGiorniDiffConsegna
     */
    public function setNGiorniDiffConsegna($nGiorniDiffConsegna)
    {
        $this->nGiorniDiffConsegna = $nGiorniDiffConsegna;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataProdGt()
    {
        return $this->dataProdGt;
    }

    /**
     * @param \DateTime|null $dataProdGt
     */
    public function setDataProdGt($dataProdGt)
    {
        $this->dataProdGt = $dataProdGt;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataProdAccessori()
    {
        return $this->dataProdAccessori;
    }

    /**
     * @param \DateTime|null $dataProdAccessori
     */
    public function setDataProdAccessori($dataProdAccessori)
    {
        $this->dataProdAccessori = $dataProdAccessori;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param \DateTime $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * @return int|null
     */
    public function getNGiorniPosticipo()
    {
        return $this->nGiorniPosticipo;
    }

    /**
     * @param int|null $nGiorniPosticipo
     */
    public function setNGiorniPosticipo($nGiorniPosticipo)
    {
        $this->nGiorniPosticipo = $nGiorniPosticipo;
    }

    /**
     * @return null|string
     */
    public function getXdecol()
    {
        return $this->xdecol;
    }

    /**
     * @param null|string $xdecol
     */
    public function setXdecol($xdecol)
    {
        $this->xdecol = $xdecol;
    }

    /**
     * @return null|string
     */
    public function getMqTotali()
    {
        return $this->mqTotali;
    }

    /**
     * @param null|string $mqTotali
     */
    public function setMqTotali($mqTotali)
    {
        $this->mqTotali = $mqTotali;
    }


   }
