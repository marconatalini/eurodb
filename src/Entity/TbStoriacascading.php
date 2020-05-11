<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbStoriacascading
 *
 * @ORM\Table(name="tb_storiacascading", indexes={@ORM\Index(name="ID_cascading_idx", columns={"ID_cascading"})})
 * @ORM\Entity
 */
class TbStoriacascading
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_storico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStorico;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_eventoCascading", type="integer", nullable=true)
     */
    private $idEventocascading;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Importo", type="float", precision=10, scale=0, nullable=true)
     */
    private $importo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescrizioneEvento", type="string", length=255, nullable=true)
     */
    private $descrizioneevento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \TbCascading
     *
     * @ORM\ManyToOne(targetEntity="TbCascading")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_cascading", referencedColumnName="ID_cascading")
     * })
     */
    private $idCascading;


}
