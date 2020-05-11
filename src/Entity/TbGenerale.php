<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbGenerale
 *
 * @ORM\Table(name="tb_generale")
 * @ORM\Entity
 */
class TbGenerale
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_DatiBase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDatibase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=100, nullable=true)
     */
    private $descrizione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ValTXT", type="string", length=255, nullable=true)
     */
    private $valtxt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ValLong", type="integer", nullable=true)
     */
    private $vallong;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ValBoolean", type="boolean", nullable=true)
     */
    private $valboolean;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ValData", type="datetime", nullable=true)
     */
    private $valdata;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
