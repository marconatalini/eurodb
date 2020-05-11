<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDettaglioproduzione
 *
 * @ORM\Table(name="tb_dettaglioproduzione", indexes={@ORM\Index(name="ID_Ordine_idx", columns={"ID_Ordine"})})
 * @ORM\Entity
 */
class TbDettaglioproduzione
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_dettaglio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDettaglio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_CicloProd", type="integer", nullable=true)
     */
    private $idCicloprod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_fineProd", type="datetime", nullable=true)
     */
    private $dFineprod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_Status", type="integer", nullable=true)
     */
    private $idStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoteProd", type="string", length=255, nullable=true)
     */
    private $noteprod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \TbOrdini
     *
     * @ORM\ManyToOne(targetEntity="TbOrdini")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Ordine", referencedColumnName="ID_ordine")
     * })
     */
    private $idOrdine;


}
