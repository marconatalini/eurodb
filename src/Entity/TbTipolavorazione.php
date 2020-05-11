<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTipolavorazione
 *
 * @ORM\Table(name="tb_tipolavorazione")
 * @ORM\Entity
 */
class TbTipolavorazione
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_tipoLav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipolav;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lavorazione", type="string", length=50, nullable=true)
     */
    private $lavorazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
