<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTerminiconsegna
 *
 * @ORM\Table(name="tb_terminiconsegna")
 * @ORM\Entity
 */
class TbTerminiconsegna
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_parametro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParametro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parametro", type="string", length=100, nullable=true)
     */
    private $parametro;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gg_consegna", type="integer", nullable=true)
     */
    private $ggConsegna;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gg_consegna_nc", type="integer", nullable=true)
     */
    private $ggConsegnaNc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sc", type="string", length=1, nullable=true)
     */
    private $sc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finitura", type="string", length=100, nullable=true)
     */
    private $finitura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
