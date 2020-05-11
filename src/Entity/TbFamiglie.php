<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbFamiglie
 *
 * @ORM\Table(name="tb_famiglie")
 * @ORM\Entity
 */
class TbFamiglie
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_famiglia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamiglia;

    /**
     * @var string
     *
     * @ORM\Column(name="Famiglia", type="string", length=100, nullable=false)
     */
    private $famiglia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
