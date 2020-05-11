<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMontaggio
 *
 * @ORM\Table(name="tb_montaggio")
 * @ORM\Entity
 */
class TbMontaggio
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_montaggio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMontaggio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montaggio", type="string", length=255, nullable=true)
     */
    private $montaggio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_serie", type="integer", nullable=true)
     */
    private $idSerie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
