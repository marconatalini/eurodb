<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAgenti
 *
 * @ORM\Table(name="tb_agenti")
 * @ORM\Entity
 */
class TbAgenti
{
    /**
     * @var string
     *
     * @ORM\Column(name="XAGEN1", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xagen1;

    /**
     * @var string
     *
     * @ORM\Column(name="NomeAgente", type="string", length=255, nullable=false)
     */
    private $nomeagente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MailAgente", type="string", length=255, nullable=true)
     */
    private $mailagente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cellulareAgente", type="string", length=30, nullable=true)
     */
    private $cellulareagente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomeBreveAgente", type="string", length=100, nullable=true)
     */
    private $nomebreveagente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDsuppCommerciale", type="integer", nullable=true)
     */
    private $idsuppcommerciale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDsuppLA", type="integer", nullable=true)
     */
    private $idsuppla;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDsuppScuri", type="integer", nullable=true)
     */
    private $idsuppscuri;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
