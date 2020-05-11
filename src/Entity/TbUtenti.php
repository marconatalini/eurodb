<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbUtenti
 *
 * @ORM\Table(name="tb_utenti")
 * @ORM\Entity
 */
class TbUtenti
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_user", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Password", type="string", length=20, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MsgBenvenuto", type="string", length=255, nullable=true)
     */
    private $msgbenvenuto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
