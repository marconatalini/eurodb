<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCondizioniclienti
 *
 * @ORM\Table(name="tb_condizioniclienti")
 * @ORM\Entity
 */
class TbCondizioniclienti
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="xcodic", type="string", length=6, nullable=false)
     */
    private $xcodic;

    /**
     * @var string
     *
     * @ORM\Column(name="ragione_sociale", type="string", length=100, nullable=false)
     */
    private $ragioneSociale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="noConferma", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $noconferma = 'b\'0\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="noConfermaPersiane", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $noconfermapersiane = 'b\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="txt_mail", type="text", length=16777215, nullable=true)
     */
    private $txtMail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
