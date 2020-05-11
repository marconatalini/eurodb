<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLavorazioni
 *
 * @ORM\Table(name="tb_lavorazioni")
 * @ORM\Entity
 */
class TbLavorazioni
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lavorazione", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLavorazione;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_tipoLav", type="integer", nullable=false)
     */
    private $idTipolav;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Diam_punta", type="float", precision=10, scale=0, nullable=true)
     */
    private $diamPunta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Lunghezza", type="integer", nullable=true)
     */
    private $lunghezza;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Passo", type="integer", nullable=true)
     */
    private $passo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finalita", type="string", length=100, nullable=true)
     */
    private $finalita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
