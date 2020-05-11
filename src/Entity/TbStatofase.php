<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbStatofase
 *
 * @ORM\Table(name="tb_statofase")
 * @ORM\Entity
 */
class TbStatofase
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Fase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescrizioneFase", type="string", length=30, nullable=true)
     */
    private $descrizionefase;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OrdineFase", type="integer", nullable=true)
     */
    private $ordinefase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
