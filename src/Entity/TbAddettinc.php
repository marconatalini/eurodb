<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAddettinc
 *
 * @ORM\Table(name="tb_addettinc")
 * @ORM\Entity
 */
class TbAddettinc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_AddettoNC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAddettonc;

    /**
     * @var string
     *
     * @ORM\Column(name="Addetto", type="string", length=100, nullable=false)
     */
    private $addetto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
