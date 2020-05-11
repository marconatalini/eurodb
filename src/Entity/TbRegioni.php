<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbRegioni
 *
 * @ORM\Table(name="tb_regioni")
 * @ORM\Entity
 */
class TbRegioni
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Regione", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Regione", type="string", length=50, nullable=true)
     */
    private $regione;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Trasporto", type="float", precision=10, scale=0, nullable=true)
     */
    private $trasporto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
