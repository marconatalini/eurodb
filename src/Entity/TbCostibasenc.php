<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCostibasenc
 *
 * @ORM\Table(name="tb_costibasenc")
 * @ORM\Entity
 */
class TbCostibasenc
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_costo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Articolo", type="string", length=100, nullable=false)
     */
    private $articolo;

    /**
     * @var float
     *
     * @ORM\Column(name="Costo", type="float", precision=10, scale=0, nullable=false)
     */
    private $costo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
