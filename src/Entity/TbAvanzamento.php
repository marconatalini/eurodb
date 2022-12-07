<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAvanzamento
 *
 * @ORM\Table(name="tb_avanzamento", indexes={@ORM\Index(name="codice_fase_idx", columns={"codice_fase"})})
 * @ORM\Entity
 */
class TbAvanzamento
{
    public const MAX_RESULT = 1000;

    /**
     * @var int
     *
     * @ORM\Column(name="id_avanzamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvanzamento;

    /**
     * @var string|null
     *
     * @ORM\ManyToOne(targetEntity="TbDipendenti")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codice_operatore", referencedColumnName="ID_DIPENDENTE")
     * })
     *
     */
    private $codiceOperatore;

    /**
     * @var bool
     *
     * @ORM\Column(name="inizio_fine", type="boolean", nullable=false, options={"default"="b'0'"})
     */
    private $inizioFine;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_ordine", type="integer", nullable=false)
     */
    private $numeroOrdine;

    /**
     * @var string
     *
     * @ORM\Column(name="lotto_ordine", type="string", length=1, nullable=false)
     */
    private $lottoOrdine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="secondi", type="integer", nullable=true)
     */
    private $secondi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bilancelle", type="decimal", precision=3, scale=1, nullable=true, options={"default"="0.0","comment"="Numero di bilancelle occupate dal materiale"})
     */
    private $bilancelle = '0.0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="carrello", type="string", length=10, nullable=true)
     */
    private $carrello;

    /**
     * @var int|null
     *
     * @ORM\Column(name="multiordine", type="integer", nullable=true)
     */
    private $multiordine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=100, nullable=true)
     */
    private $note;

    /**
     * @var \TbDescrizioniFasiProduzione
     *
     * @ORM\ManyToOne(targetEntity="TbDescrizioniFasiProduzione")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codice_fase", referencedColumnName="codice_fase")
     * })
     */
    private $codiceFase;

    public function __construct()
    {
        $tz = new \DateTimeZone('Europe/Rome');
        $this->timestamp = new \DateTime('now', $tz);
        $this->inizioFine = false;
    }

    public function __toString()
    {
        return sprintf("%s_%s %s", $this->numeroOrdine, $this->lottoOrdine, $this->codiceFase);
    }


    /**
     * @return int
     */
    public function getIdAvanzamento()
    {
        return $this->idAvanzamento;
    }

    /**
     * @param int $idAvanzamento
     */
    public function setIdAvanzamento($idAvanzamento)
    {
        $this->idAvanzamento = $idAvanzamento;
    }

    /**
     * @return null|string
     */
    public function getCodiceOperatore()
    {
        return $this->codiceOperatore;
    }

    /**
     * @param null|string $codiceOperatore
     */
    public function setCodiceOperatore($codiceOperatore)
    {
        $this->codiceOperatore = $codiceOperatore;
    }

    /**
     * @return bool
     */
    public function isInizioFine()
    {
        return $this->inizioFine;
    }

    /**
     * @param bool $inizioFine
     */
    public function setInizioFine($inizioFine)
    {
        $this->inizioFine = $inizioFine;
    }

    /**
     * @return int
     */
    public function getNumeroOrdine()
    {
        return $this->numeroOrdine;
    }

    /**
     * @param int $numeroOrdine
     */
    public function setNumeroOrdine($numeroOrdine)
    {
        $this->numeroOrdine = $numeroOrdine;
    }

    /**
     * @return string
     */
    public function getLottoOrdine()
    {
        return $this->lottoOrdine;
    }

    /**
     * @param string $lottoOrdine
     */
    public function setLottoOrdine($lottoOrdine)
    {
        $this->lottoOrdine = $lottoOrdine;
    }

    /**
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param \DateTime|null $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return int|null
     */
    public function getSecondi()
    {
        return $this->secondi;
    }

    /**
     * @param int|null $secondi
     */
    public function setSecondi($secondi)
    {
        $this->secondi = $secondi;
    }

    /**
     * @return null|string
     */
    public function getBilancelle()
    {
        return $this->bilancelle;
    }

    /**
     * @param null|string $bilancelle
     */
    public function setBilancelle($bilancelle)
    {
        $this->bilancelle = $bilancelle;
    }

    /**
     * @return \TbDescrizioniFasiProduzione
     */
    public function getCodiceFase()
    {
        return $this->codiceFase;
    }

    /**
     * @param \TbDescrizioniFasiProduzione $codiceFase
     */
    public function setCodiceFase($codiceFase)
    {
        $this->codiceFase = $codiceFase;
    }

    /**
     * @return null|string
     */
    public function getCarrello()
    {
        return $this->carrello;
    }

    /**
     * @param null|string $carrello
     */
    public function setCarrello($carrello)
    {
        $this->carrello = $carrello;
    }

    /**
     * @return int|null
     */
    public function getMultiordine()
    {
        return $this->multiordine;
    }

    /**
     * @param int|null $multiordine
     */
    public function setMultiordine($multiordine)
    {
        $this->multiordine = $multiordine;
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
    

}
