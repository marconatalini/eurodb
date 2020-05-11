<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLegalerappr
 *
 * @ORM\Table(name="tb_legalerappr")
 * @ORM\Entity
 */
class TbLegalerappr
{
    /**
     * @var string
     *
     * @ORM\Column(name="XCODIC", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xcodic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LegaleRappr", type="string", length=50, nullable=true)
     */
    private $legalerappr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
