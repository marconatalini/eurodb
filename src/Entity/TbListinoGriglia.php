<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbListinoGriglia
 *
 * @ORM\Table(name="tb_listino_griglia")
 * @ORM\Entity
 */
class TbListinoGriglia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_listini_griglia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idListiniGriglia;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_listino", type="string", length=15, nullable=false)
     */
    private $codiceListino;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipologia", type="string", length=15, nullable=true)
     */
    private $tipologia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="revisione", type="integer", nullable=true, options={"default"="1"})
     */
    private $revisione = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="larghezza", type="integer", nullable=true)
     */
    private $larghezza;

    /**
     * @var int|null
     *
     * @ORM\Column(name="altezza", type="integer", nullable=true)
     */
    private $altezza;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prezzo", type="float", precision=10, scale=0, nullable=true)
     */
    private $prezzo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
