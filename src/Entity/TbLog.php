<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLog
 *
 * @ORM\Table(name="tb_log")
 * @ORM\Entity
 */
class TbLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_log", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_Ordine", type="integer", nullable=true)
     */
    private $idOrdine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ID_user", type="string", length=20, nullable=true)
     */
    private $idUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="TimeStamp", type="datetime", nullable=true)
     */
    private $timestamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Operazione", type="string", length=100, nullable=true)
     */
    private $operazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    public function __construct()
    {
        $this->timestamp = new \DateTime();
        $this->lastUpdate = new \DateTime();
    }


    /**
     * @return int
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * @param int $idLog
     */
    public function setIdLog($idLog)
    {
        $this->idLog = $idLog;
    }

    /**
     * @return int|null
     */
    public function getIdOrdine()
    {
        return $this->idOrdine;
    }

    /**
     * @param int|null $idOrdine
     */
    public function setIdOrdine($idOrdine)
    {
        $this->idOrdine = $idOrdine;
    }

    /**
     * @return null|string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param null|string $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }


    /**
     * @return null|string
     */
    public function getOperazione()
    {
        return $this->operazione;
    }

    /**
     * @param null|string $operazione
     */
    public function setOperazione($operazione)
    {
        $this->operazione = $operazione;
    }



}
