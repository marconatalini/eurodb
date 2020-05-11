<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbProvince
 *
 * @ORM\Table(name="tb_province")
 * @ORM\Entity
 */
class TbProvince
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Provincia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Abbrev_Prov", type="string", length=2, nullable=true)
     */
    private $abbrevProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Provincia", type="string", length=20, nullable=true)
     */
    private $provincia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_Regione", type="integer", nullable=true)
     */
    private $idRegione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
