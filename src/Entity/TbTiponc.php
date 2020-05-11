<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTiponc
 *
 * @ORM\Table(name="tb_tiponc")
 * @ORM\Entity
 */
class TbTiponc
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_tipoNC", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTiponc;

    /**
     * @var string
     *
     * @ORM\Column(name="DescrizioneTipoNC", type="string", length=50, nullable=false)
     */
    private $descrizionetiponc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
