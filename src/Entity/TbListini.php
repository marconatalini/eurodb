<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbListini
 *
 * @ORM\Table(name="tb_listini")
 * @ORM\Entity
 */
class TbListini
{
    /**
     * @var int
     *
     * @ORM\Column(name="ListinoNumero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $listinonumero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ExtraNetto", type="float", precision=10, scale=0, nullable=true)
     */
    private $extranetto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
