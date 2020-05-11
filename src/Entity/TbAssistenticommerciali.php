<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAssistenticommerciali
 *
 * @ORM\Table(name="tb_assistenticommerciali")
 * @ORM\Entity
 */
class TbAssistenticommerciali
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDsuppCommerciale", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsuppcommerciale;

    /**
     * @var string
     *
     * @ORM\Column(name="NomeAssistente", type="string", length=100, nullable=false)
     */
    private $nomeassistente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrariMattina", type="string", length=30, nullable=true)
     */
    private $orarimattina;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrariPomeriggio", type="string", length=30, nullable=true)
     */
    private $oraripomeriggio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
