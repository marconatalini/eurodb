<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbReparti
 *
 * @ORM\Table(name="tb_reparti")
 * @ORM\Entity
 */
class TbReparti
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_RepNota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRepnota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=30, nullable=true)
     */
    private $descrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
