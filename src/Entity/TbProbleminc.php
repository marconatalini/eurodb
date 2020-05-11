<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbProbleminc
 *
 * @ORM\Table(name="tb_probleminc")
 * @ORM\Entity
 */
class TbProbleminc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Problema", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProblema;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodiceProblema", type="string", length=3, nullable=true)
     */
    private $codiceproblema;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescrProblema", type="string", length=150, nullable=true)
     */
    private $descrproblema;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipoProblema", type="string", length=30, nullable=true)
     */
    private $tipoproblema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
