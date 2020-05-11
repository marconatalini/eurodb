<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCondizioniCliente
 *
 * @ORM\Table(name="tb_condizioni_cliente")
 * @ORM\Entity
 */
class TbCondizioniCliente
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
     * @var float|null
     *
     * @ORM\Column(name="Sconto1", type="float", precision=10, scale=0, nullable=true)
     */
    private $sconto1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Sconto2", type="float", precision=10, scale=0, nullable=true)
     */
    private $sconto2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Extra1", type="float", precision=10, scale=0, nullable=true)
     */
    private $extra1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Sconto3", type="float", precision=10, scale=0, nullable=true)
     */
    private $sconto3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotaCliente", type="string", length=255, nullable=true)
     */
    private $notacliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
