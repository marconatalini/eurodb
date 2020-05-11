<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMaterialiordinila
 *
 * @ORM\Table(name="tb_materialiordinila")
 * @ORM\Entity
 */
class TbMaterialiordinila
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_materiale", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMateriale;

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
     * @ORM\Column(name="codice", type="string", length=15, nullable=true)
     */
    private $codice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pz", type="integer", nullable=true)
     */
    private $pz;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metri", type="integer", nullable=true)
     */
    private $metri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reparto", type="string", length=6, nullable=true)
     */
    private $reparto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="colore", type="string", length=13, nullable=true)
     */
    private $colore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="curvatura", type="string", length=4, nullable=true)
     */
    private $curvatura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rifilo", type="string", length=6, nullable=true)
     */
    private $rifilo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
