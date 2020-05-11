<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLavorazioniArticoli
 *
 * @ORM\Table(name="tb_lavorazioni_articoli")
 * @ORM\Entity
 */
class TbLavorazioniArticoli
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lavorazione_articolo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLavorazioneArticolo;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_articolo", type="integer", nullable=false)
     */
    private $idArticolo;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_lavorazione", type="integer", nullable=false)
     */
    private $idLavorazione;

    /**
     * @var bool
     *
     * @ORM\Column(name="NumeroLavorazioni", type="boolean", nullable=false, options={"default"="1"})
     */
    private $numerolavorazioni = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
