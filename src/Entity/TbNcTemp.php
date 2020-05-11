<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNcTemp
 *
 * @ORM\Table(name="tb_nc_temp")
 * @ORM\Entity
 */
class TbNcTemp
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
    private $numeroordine;

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
    private $costo;

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
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
