<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCostinc
 *
 * @ORM\Table(name="tb_costinc", indexes={@ORM\Index(name="ID_nc_idx", columns={"ID_nc"})})
 * @ORM\Entity
 */
class TbCostinc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_spesa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpesa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_costo", type="integer", nullable=true)
     */
    private $idCosto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Quantità", type="integer", nullable=true)
     */
    private $quantità;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \TbNc
     *
     * @ORM\ManyToOne(targetEntity="TbNc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_nc", referencedColumnName="ID_nc")
     * })
     */
    private $idNc;


}
