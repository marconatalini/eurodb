<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbFiniture
 *
 * @ORM\Table(name="tb_finiture")
 * @ORM\Entity
 */
class TbFiniture
{
    /**
     * @var string
     *
     * @ORM\Column(name="Finitura", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $finitura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CategoriaFinitura", type="string", length=20, nullable=true)
     */
    private $categoriafinitura;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="STDpersiane", type="boolean", nullable=true)
     */
    private $stdpersiane;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ExtraCommessa", type="float", precision=10, scale=0, nullable=true)
     */
    private $extracommessa;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Verniciatore", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idVerniciatore;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="STDlegnoalluminio", type="boolean", nullable=true)
     */
    private $stdlegnoalluminio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gtot_classe3", type="decimal", precision=3, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $gtotClasse3 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gtot_classe4", type="decimal", precision=3, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $gtotClasse4 = '0.00';


}
