<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbVerniciatori
 *
 * @ORM\Table(name="tb_verniciatori")
 * @ORM\Entity
 */
class TbVerniciatori
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Verniciatore", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVerniciatore;

    /**
     * @var string
     *
     * @ORM\Column(name="Verniciatore", type="string", length=100, nullable=false)
     */
    private $verniciatore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
