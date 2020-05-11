<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCicliproduzione
 *
 * @ORM\Table(name="tb_cicliproduzione")
 * @ORM\Entity
 */
class TbCicliproduzione
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ciclo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiclo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=60, nullable=true)
     */
    private $descrizione;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default", type="boolean", nullable=true)
     */
    private $default;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ordinamento", type="integer", nullable=true)
     */
    private $ordinamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_Macrofase", type="integer", nullable=true)
     */
    private $idMacrofase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TestoSchedaControllo", type="string", length=100, nullable=true)
     */
    private $testoschedacontrollo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RespControllo", type="string", length=30, nullable=true)
     */
    private $respcontrollo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Istruzione", type="string", length=100, nullable=true)
     */
    private $istruzione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Rev_Istruzione", type="string", length=10, nullable=true)
     */
    private $revIstruzione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
