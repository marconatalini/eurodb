<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLogEurostep
 *
 * @ORM\Table(name="tb_log_eurostep")
 * @ORM\Entity
 */
class TbLogEurostep
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log_eurostep", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogEurostep;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_operatore", type="string", length=5, nullable=false)
     */
    private $codiceOperatore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="azione", type="string", length=45, nullable=true)
     */
    private $azione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="appversion", type="string", length=15, nullable=true)
     */
    private $appversion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
