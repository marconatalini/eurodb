<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbRilevatorinc
 *
 * @ORM\Table(name="tb_rilevatorinc")
 * @ORM\Entity
 */
class TbRilevatorinc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_RilevatoreNC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRilevatorenc;

    /**
     * @var string
     *
     * @ORM\Column(name="Rilevatore", type="string", length=50, nullable=false)
     */
    private $rilevatore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
