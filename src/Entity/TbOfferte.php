<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOfferte
 *
 * @ORM\Table(name="tb_offerte")
 * @ORM\Entity
 */
class TbOfferte
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_offerta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOfferta;

    /**
     * @var int
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var bool
     *
     * @ORM\Column(name="Revisione", type="boolean", nullable=false)
     */
    private $revisione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Cliente", type="string", length=6, nullable=true)
     */
    private $codCliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cliente", type="string", length=50, nullable=true)
     */
    private $cliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PersonaRiferimento", type="string", length=50, nullable=true)
     */
    private $personariferimento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Rif_Cantiere", type="string", length=50, nullable=true)
     */
    private $rifCantiere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dimesioni", type="string", length=50, nullable=true)
     */
    private $dimesioni;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodSerie", type="string", length=5, nullable=true)
     */
    private $codserie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescrizioneModello", type="string", length=250, nullable=true)
     */
    private $descrizionemodello;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Battuta", type="string", length=40, nullable=true)
     */
    private $battuta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TelaioCassa", type="string", length=30, nullable=true)
     */
    private $telaiocassa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LatiTelaio", type="string", length=4, nullable=true)
     */
    private $latitelaio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FZoccolo", type="string", length=20, nullable=true)
     */
    private $fzoccolo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FFascia", type="string", length=20, nullable=true)
     */
    private $ffascia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PFZoccolo", type="string", length=20, nullable=true)
     */
    private $pfzoccolo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PFFascia", type="string", length=20, nullable=true)
     */
    private $pffascia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColoreAnta", type="string", length=50, nullable=true)
     */
    private $coloreanta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColoreCassa", type="string", length=50, nullable=true)
     */
    private $colorecassa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Cerniere", type="boolean", nullable=true)
     */
    private $cerniere;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Cardini", type="boolean", nullable=true)
     */
    private $cardini;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Chiusure", type="boolean", nullable=true)
     */
    private $chiusure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Note", type="text", length=16777215, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataOfferta", type="datetime", nullable=true)
     */
    private $dataofferta;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Totale", type="float", precision=10, scale=0, nullable=true)
     */
    private $totale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipoDoc", type="string", length=3, nullable=true)
     */
    private $tipodoc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Sconto", type="float", precision=10, scale=0, nullable=true)
     */
    private $sconto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ScontoNascosto", type="float", precision=10, scale=0, nullable=true)
     */
    private $scontonascosto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conclusione", type="text", length=16777215, nullable=true)
     */
    private $conclusione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Indirizzo_Cliente", type="string", length=100, nullable=true)
     */
    private $indirizzoCliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cap_Cliente", type="string", length=5, nullable=true)
     */
    private $capCliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Paese_Cliente", type="string", length=100, nullable=true)
     */
    private $paeseCliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prov_Cliente", type="string", length=2, nullable=true)
     */
    private $provCliente;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ExtraColore", type="float", precision=10, scale=0, nullable=true)
     */
    private $extracolore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotaInterna", type="text", length=16777215, nullable=true)
     */
    private $notainterna;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ListinoNumero", type="integer", nullable=true)
     */
    private $listinonumero;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Sconto3", type="float", precision=10, scale=0, nullable=true)
     */
    private $sconto3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
