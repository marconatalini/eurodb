<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCodicinc
 *
 * @ORM\Table(name="tb_codicinc", indexes={@ORM\Index(name="ID_NC_idx", columns={"ID_NC"})})
 * @ORM\Entity
 */
class TbCodicinc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_DettaglioNC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDettaglionc;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_NC", type="integer", nullable=false)
     */
    private $idNc;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Reparto", type="integer", nullable=false)
     */
    private $idReparto;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Problema", type="integer", nullable=false)
     */
    private $idProblema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
