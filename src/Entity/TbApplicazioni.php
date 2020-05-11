<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbApplicazioni
 *
 * @ORM\Table(name="tb_applicazioni")
 * @ORM\Entity
 */
class TbApplicazioni
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Applicazione", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idApplicazione;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoApplicazione", type="string", length=2, nullable=false)
     */
    private $tipoapplicazione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=50, nullable=true)
     */
    private $descrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
