<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbFerie
 *
 * @ORM\Table(name="tb_ferie")
 * @ORM\Entity
 */
class TbFerie
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_giorno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGiorno;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
