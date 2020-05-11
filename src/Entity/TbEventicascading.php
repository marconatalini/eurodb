<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEventicascading
 *
 * @ORM\Table(name="tb_eventicascading")
 * @ORM\Entity
 */
class TbEventicascading
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_eventoCascading", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEventocascading;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EventoCascading", type="string", length=50, nullable=true)
     */
    private $eventocascading;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
