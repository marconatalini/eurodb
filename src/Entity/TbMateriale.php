<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMateriale
 *
 * @ORM\Table(name="tb_materiale")
 * @ORM\Entity
 */
class TbMateriale
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_materiale", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMateriale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice", type="string", length=30, nullable=true)
     */
    private $codice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
