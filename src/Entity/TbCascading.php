<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCascading
 *
 * @ORM\Table(name="tb_cascading")
 * @ORM\Entity
 */
class TbCascading
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_cascading", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCascading;

    /**
     * @var string
     *
     * @ORM\Column(name="XCODIC", type="string", length=255, nullable=false)
     */
    private $xcodic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_TipoContratto", type="integer", nullable=true)
     */
    private $idTipocontratto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotaContratto", type="string", length=255, nullable=true)
     */
    private $notacontratto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Contratto", type="datetime", nullable=true)
     */
    private $dContratto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Scadenza", type="datetime", nullable=true)
     */
    private $dScadenza;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Disdetta", type="datetime", nullable=true)
     */
    private $dDisdetta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
