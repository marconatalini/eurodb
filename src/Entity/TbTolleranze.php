<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTolleranze
 *
 * @ORM\Table(name="tb_tolleranze")
 * @ORM\Entity
 */
class TbTolleranze
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_tolleranza", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTolleranza;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tolleranze", type="string", length=255, nullable=true)
     */
    private $tolleranze;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
