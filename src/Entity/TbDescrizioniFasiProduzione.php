<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDescrizioniFasiProduzione
 *
 * @ORM\Table(name="tb_descrizioni_fasi_produzione")
 * @ORM\Entity
 */
class TbDescrizioniFasiProduzione
{
    /**
     * @var string
     *
     * @ORM\Column(name="codice_fase", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codiceFase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descrizione", type="string", length=45, nullable=true)
     */
    private $descrizione;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codice_reparto", type="integer", nullable=true)
     */
    private $codiceReparto = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_fase_as400", type="string", length=2, nullable=true)
     */
    private $codiceFaseAs400;

    /**
     * @return string
     */
    public function getCodiceFase()
    {
        return $this->codiceFase;
    }

    /**
     * @param string $codiceFase
     */
    public function setCodiceFase($codiceFase)
    {
        $this->codiceFase = $codiceFase;
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
     * @return int|null
     */
    public function getCodiceReparto()
    {
        return $this->codiceReparto;
    }

    /**
     * @param int|null $codiceReparto
     */
    public function setCodiceReparto($codiceReparto)
    {
        $this->codiceReparto = $codiceReparto;
    }

    /**
     * @return null|string
     */
    public function getCodiceFaseAs400()
    {
        return $this->codiceFaseAs400;
    }

    /**
     * @param null|string $codiceFaseAs400
     */
    public function setCodiceFaseAs400($codiceFaseAs400)
    {
        $this->codiceFaseAs400 = $codiceFaseAs400;
    }



}
