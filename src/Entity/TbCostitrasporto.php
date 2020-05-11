<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCostitrasporto
 *
 * @ORM\Table(name="tb_costitrasporto")
 * @ORM\Entity
 */
class TbCostitrasporto
{
    /**
     * @var string
     *
     * @ORM\Column(name="PROV", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="COSTO", type="float", precision=10, scale=0, nullable=true)
     */
    private $costo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
