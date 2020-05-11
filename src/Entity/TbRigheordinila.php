<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbRigheordinila
 *
 * @ORM\Table(name="tb_righeordinila")
 * @ORM\Entity
 */
class TbRigheordinila
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_riga", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRiga;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_sviluppo", type="datetime", nullable=true)
     */
    private $dataSviluppo;

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
     * @var int|null
     *
     * @ORM\Column(name="numero_csm", type="integer", nullable=true)
     */
    private $numeroCsm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xcodic", type="string", length=6, nullable=true)
     */
    private $xcodic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="riferimento", type="string", length=100, nullable=true)
     */
    private $riferimento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pos", type="string", length=3, nullable=true)
     */
    private $pos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rif_pos", type="string", length=20, nullable=true)
     */
    private $rifPos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice", type="string", length=25, nullable=true)
     */
    private $codice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="L", type="integer", nullable=true)
     */
    private $l;

    /**
     * @var int|null
     *
     * @ORM\Column(name="H", type="integer", nullable=true)
     */
    private $h;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pz", type="integer", nullable=true)
     */
    private $pz;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prezzo", type="float", precision=10, scale=0, nullable=true)
     */
    private $prezzo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colore", type="string", length=100, nullable=true)
     */
    private $colore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sc", type="string", length=1, nullable=true)
     */
    private $sc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_ordine", type="datetime", nullable=true)
     */
    private $dataOrdine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pz_cornici", type="integer", nullable=true)
     */
    private $pzCornici;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pz_fsq", type="integer", nullable=true)
     */
    private $pzFsq;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pz_archi", type="integer", nullable=true)
     */
    private $pzArchi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mq_totali", type="decimal", precision=6, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mqTotali = '0.00';

    /**
     * @var float|null
     *
     * @ORM\Column(name="sconto_extra", type="float", precision=10, scale=0, nullable=true)
     */
    private $scontoExtra = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_richiesta", type="datetime", nullable=true)
     */
    private $dataRichiesta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_ordine", type="string", length=4, nullable=true)
     */
    private $tipoOrdine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome_fattura", type="string", length=50, nullable=true)
     */
    private $nomeFattura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome_dest", type="string", length=100, nullable=true)
     */
    private $nomeDest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="via_dest", type="string", length=100, nullable=true)
     */
    private $viaDest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cap_paese_dest", type="string", length=100, nullable=true)
     */
    private $capPaeseDest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tecnico", type="string", length=30, nullable=true)
     */
    private $tecnico;

    /**
     * @var float|null
     *
     * @ORM\Column(name="sconto_nascosto", type="float", precision=10, scale=0, nullable=true)
     */
    private $scontoNascosto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
