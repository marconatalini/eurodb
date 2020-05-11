<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbArticoliCollegati
 *
 * @ORM\Table(name="tb_articoli_collegati")
 * @ORM\Entity
 */
class TbArticoliCollegati
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_linkarticolo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLinkarticolo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_articolo", type="integer", nullable=true)
     */
    private $idArticolo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_articoloCollegato", type="integer", nullable=true)
     */
    private $idArticolocollegato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
