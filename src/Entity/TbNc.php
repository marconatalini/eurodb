<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNc
 *
 * @ORM\Table(name="tb_nc")
 * @ORM\Entity
 */
class TbNc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_nc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNc;

    /**
     * @var int
     *
     * @ORM\Column(name="NumeroNC", type="integer", nullable=false)
     */
    private $numeronc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_NC", type="datetime", nullable=true)
     */
    private $dNc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Rilevatore", type="string", length=50, nullable=true)
     */
    private $rilevatore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XCODIC", type="string", length=6, nullable=true)
     */
    private $xcodic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RI", type="string", length=1, nullable=true, options={"comment"="A=
R=reclamo cliente
I=NC interna
F=Fornitore
S=NC di sistema"})
     */
    private $ri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumeroOrdine", type="string", length=8, nullable=true)
     */
    private $ordinelotto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero_ordine", type="integer", nullable=true)
     */
    private $numeroOrdine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lotto_ordine", type="string", length=1, nullable=true)
     */
    private $lottoOrdine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Colore", type="string", length=50, nullable=true)
     */
    private $colore;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_inizio", type="datetime", nullable=true)
     */
    private $dInizio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AddettoNC", type="integer", nullable=true)
     */
    private $addettonc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_invio", type="datetime", nullable=true)
     */
    private $dInvio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Verniciatore", type="integer", nullable=true)
     */
    private $verniciatore;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_rientro", type="datetime", nullable=true)
     */
    private $dRientro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_finito", type="datetime", nullable=true)
     */
    private $dFinito;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_causale", type="integer", nullable=true)
     */
    private $idCausale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ProbabileCausa", type="string", length=255, nullable=true)
     */
    private $probabilecausa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Soluzione", type="string", length=255, nullable=true)
     */
    private $soluzione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=true)
     */
    private $nota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mercato", type="string", length=2, nullable=true)
     */
    private $mercato;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Costo", type="float", precision=10, scale=0, nullable=true)
     */
    private $costo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bonus", type="integer", nullable=true)
     */
    private $bonus = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Detrazione", type="integer", nullable=true)
     */
    private $detrazione = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="no_detrazione", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $noDetrazione = 'b\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XCODICF", type="string", length=6, nullable=true)
     */
    private $xcodicf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_approtamento", type="datetime", nullable=true)
     */
    private $dApprotamento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_consegna_richiesta", type="datetime", nullable=true)
     */
    private $dConsegnaRichiesta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Peso", type="decimal", precision=2, scale=1, nullable=true, options={"default"="1.0"})
     */
    private $peso = '1.0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate;

    public function __construct()
    {
        $this->dNc = new \DateTime();
        $this->lastUpdate = new \DateTime();
    }


    /**
     * @return int
     */
    public function getIdNc()
    {
        return $this->idNc;
    }

    /**
     * @param int $idNc
     */
    public function setIdNc($idNc)
    {
        $this->idNc = $idNc;
    }

    /**
     * @return int
     */
    public function getNumeronc()
    {
        return $this->numeronc;
    }

    /**
     * @param int $numeronc
     */
    public function setNumeronc($numeronc)
    {
        $this->numeronc = $numeronc;
    }

    /**
     * @return \DateTime|null
     */
    public function getDNc()
    {
        return $this->dNc;
    }

    /**
     * @param \DateTime|null $dNc
     */
    public function setDNc($dNc)
    {
        $this->dNc = $dNc;
    }

    /**
     * @return null|string
     */
    public function getRilevatore()
    {
        return $this->rilevatore;
    }

    /**
     * @param null|string $rilevatore
     */
    public function setRilevatore($rilevatore)
    {
        $this->rilevatore = $rilevatore;
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
    public function getRi()
    {
        return $this->ri;
    }

    /**
     * @param null|string $ri
     */
    public function setRi($ri)
    {
        $this->ri = $ri;
    }

    /**
     * @return null|string
     */
    public function getNumeroOrdine()
    {
        return $this->numeroOrdine;
    }

    /**
     * @param null|string $numeroOrdine
     */
    public function setNumeroOrdine($numeroOrdine)
    {
        $this->numeroOrdine = $numeroOrdine;
    }

    /**
     * @return null|string
     */
    public function getLottoOrdine()
    {
        return $this->lottoOrdine;
    }

    /**
     * @param null|string $lottoOrdine
     */
    public function setLottoOrdine($lottoOrdine)
    {
        $this->lottoOrdine = $lottoOrdine;
    }

    /**
     * @return null|string
     */
    public function getColore()
    {
        return $this->colore;
    }

    /**
     * @param null|string $colore
     */
    public function setColore($colore)
    {
        $this->colore = $colore;
    }

    /**
     * @return \DateTime|null
     */
    public function getDInizio()
    {
        return $this->dInizio;
    }

    /**
     * @param \DateTime|null $dInizio
     */
    public function setDInizio($dInizio)
    {
        $this->dInizio = $dInizio;
    }

    /**
     * @return int|null
     */
    public function getAddettonc()
    {
        return $this->addettonc;
    }

    /**
     * @param int|null $addettonc
     */
    public function setAddettonc($addettonc)
    {
        $this->addettonc = $addettonc;
    }

    /**
     * @return \DateTime|null
     */
    public function getDInvio()
    {
        return $this->dInvio;
    }

    /**
     * @param \DateTime|null $dInvio
     */
    public function setDInvio($dInvio)
    {
        $this->dInvio = $dInvio;
    }

    /**
     * @return int|null
     */
    public function getVerniciatore()
    {
        return $this->verniciatore;
    }

    /**
     * @param int|null $verniciatore
     */
    public function setVerniciatore($verniciatore)
    {
        $this->verniciatore = $verniciatore;
    }

    /**
     * @return \DateTime|null
     */
    public function getDRientro()
    {
        return $this->dRientro;
    }

    /**
     * @param \DateTime|null $dRientro
     */
    public function setDRientro($dRientro)
    {
        $this->dRientro = $dRientro;
    }

    /**
     * @return \DateTime|null
     */
    public function getDFinito()
    {
        return $this->dFinito;
    }

    /**
     * @param \DateTime|null $dFinito
     */
    public function setDFinito($dFinito)
    {
        $this->dFinito = $dFinito;
    }

    /**
     * @return int|null
     */
    public function getIdCausale()
    {
        return $this->idCausale;
    }

    /**
     * @param int|null $idCausale
     */
    public function setIdCausale($idCausale)
    {
        $this->idCausale = $idCausale;
    }

    /**
     * @return null|string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * @param null|string $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    /**
     * @return null|string
     */
    public function getProbabilecausa()
    {
        return $this->probabilecausa;
    }

    /**
     * @param null|string $probabilecausa
     */
    public function setProbabilecausa($probabilecausa)
    {
        $this->probabilecausa = $probabilecausa;
    }

    /**
     * @return null|string
     */
    public function getSoluzione()
    {
        return $this->soluzione;
    }

    /**
     * @param null|string $soluzione
     */
    public function setSoluzione($soluzione)
    {
        $this->soluzione = $soluzione;
    }

    /**
     * @return null|string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param null|string $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    /**
     * @return null|string
     */
    public function getMercato()
    {
        return $this->mercato;
    }

    /**
     * @param null|string $mercato
     */
    public function setMercato($mercato)
    {
        $this->mercato = $mercato;
    }

    /**
     * @return float|null
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @param float|null $costo
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    /**
     * @return int|null
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * @param int|null $bonus
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    /**
     * @return int|null
     */
    public function getDetrazione()
    {
        return $this->detrazione;
    }

    /**
     * @param int|null $detrazione
     */
    public function setDetrazione($detrazione)
    {
        $this->detrazione = $detrazione;
    }

    /**
     * @return bool|null
     */
    public function getNoDetrazione()
    {
        return $this->noDetrazione;
    }

    /**
     * @param bool|null $noDetrazione
     */
    public function setNoDetrazione($noDetrazione)
    {
        $this->noDetrazione = $noDetrazione;
    }

    /**
     * @return null|string
     */
    public function getXcodicf()
    {
        return $this->xcodicf;
    }

    /**
     * @param null|string $xcodicf
     */
    public function setXcodicf($xcodicf)
    {
        $this->xcodicf = $xcodicf;
    }

    /**
     * @return \DateTime|null
     */
    public function getDApprotamento()
    {
        return $this->dApprotamento;
    }

    /**
     * @param \DateTime|null $dApprotamento
     */
    public function setDApprotamento($dApprotamento)
    {
        $this->dApprotamento = $dApprotamento;
    }

    /**
     * @return \DateTime|null
     */
    public function getDConsegnaRichiesta()
    {
        return $this->dConsegnaRichiesta;
    }

    /**
     * @param \DateTime|null $dConsegnaRichiesta
     */
    public function setDConsegnaRichiesta($dConsegnaRichiesta)
    {
        $this->dConsegnaRichiesta = $dConsegnaRichiesta;
    }

    /**
     * @return null|string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param null|string $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
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
     * @return null|string
     */
    public function getOrdinelotto()
    {
        return $this->ordinelotto;
    }

    /**
     * @param null|string $ordinelotto
     */
    public function setOrdinelotto($ordinelotto)
    {
        $this->ordinelotto = $ordinelotto;
    }



}
