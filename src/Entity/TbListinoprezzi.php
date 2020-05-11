<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbListinoprezzi
 *
 * @ORM\Table(name="tb_listinoprezzi")
 * @ORM\Entity
 */
class TbListinoprezzi
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_Listino", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idListino;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prezzo", type="float", precision=10, scale=0, nullable=true)
     */
    private $prezzo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=50, nullable=true)
     */
    private $descrizione;

    /**
     * @var int
     *
     * @ORM\Column(name="ListinoNumero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $listinonumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
