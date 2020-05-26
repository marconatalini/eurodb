<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLog
 *
 * @ORM\Table(name="tb_eurostep_error_log")
 * @ORM\Entity
 */
class TbEurostepErrorLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="stacktrace", type="string", length=255)
     */
    private $stacktrace;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true)
     */
    private $timestamp;


    public function __construct()
    {
        $this->timestamp = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStacktrace(): string
    {
        return $this->stacktrace;
    }

    /**
     * @param string $stacktrace
     */
    public function setStacktrace(string $stacktrace)
    {
        $this->stacktrace = $stacktrace;
    }

    /**
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param \DateTime|null $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }



}
