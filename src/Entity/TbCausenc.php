<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCausenc
 *
 * @ORM\Table(name="tb_causenc")
 * @ORM\Entity
 */
class TbCausenc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Causale", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausale;

    /**
     * @var string
     *
     * @ORM\Column(name="DescrizioneCausa", type="string", length=50, nullable=false)
     */
    private $descrizionecausa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
