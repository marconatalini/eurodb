<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbSerie
 *
 * @ORM\Table(name="tb_serie")
 * @ORM\Entity
 */
class TbSerie
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tipologia", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipologia;

    /**
     * @var int
     *
     * @ORM\Column(name="CodSerie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codserie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=100, nullable=true)
     */
    private $descrizione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FileListino", type="string", length=5, nullable=true)
     */
    private $filelistino;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Specchi", type="boolean", nullable=true)
     */
    private $specchi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Meccanismi", type="boolean", nullable=true)
     */
    private $meccanismi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ExtraListino", type="float", precision=10, scale=0, nullable=true)
     */
    private $extralistino;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ProdottoRivendita", type="boolean", nullable=true)
     */
    private $prodottorivendita;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ricarico", type="float", precision=10, scale=0, nullable=true)
     */
    private $ricarico;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MsgAvviso", type="string", length=255, nullable=true)
     */
    private $msgavviso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Produttore", type="string", length=45, nullable=true)
     */
    private $produttore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Class_solare", type="integer", nullable=true)
     */
    private $classSolare;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione_breve", type="string", length=45, nullable=true)
     */
    private $descrizioneBreve;


}
