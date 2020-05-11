<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDipendenti
 *
 * @ORM\Table(name="tb_dipendenti")
 * @ORM\Entity
 */
class TbDipendenti
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DIPENDENTE", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDipendente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIZIONE", type="string", length=50, nullable=true)
     */
    private $descrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate;

    public function __toString()
    {
        return $this->descrizione;
    }


    /**
     * @return string
     */
    public function getIdDipendente()
    {
        return $this->idDipendente;
    }

    /**
     * @param string $idDipendente
     */
    public function setIdDipendente($idDipendente)
    {
        $this->idDipendente = $idDipendente;
    }

    /**
     * @return null|string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * @param null|string $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }



}
