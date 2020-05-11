<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbRepartinc
 *
 * @ORM\Table(name="tb_repartinc")
 * @ORM\Entity
 */
class TbRepartinc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Reparto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReparto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodiceReparto", type="string", length=3, nullable=true)
     */
    private $codicereparto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescrReparto", type="string", length=150, nullable=true)
     */
    private $descrreparto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Luogo", type="string", length=30, nullable=true)
     */
    private $luogo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
