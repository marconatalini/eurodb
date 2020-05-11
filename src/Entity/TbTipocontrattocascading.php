<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTipocontrattocascading
 *
 * @ORM\Table(name="tb_tipocontrattocascading")
 * @ORM\Entity
 */
class TbTipocontrattocascading
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_TipoContratto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipocontratto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipoContratto", type="string", length=30, nullable=true)
     */
    private $tipocontratto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
