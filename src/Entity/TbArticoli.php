<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbArticoli
 *
 * @ORM\Table(name="tb_articoli")
 * @ORM\Entity
 */
class TbArticoli
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_articolo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticolo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codiceArt", type="string", length=13, nullable=true)
     */
    private $codiceart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XCODART", type="string", length=13, nullable=true)
     */
    private $xcodart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descrizioneArt", type="string", length=255, nullable=true)
     */
    private $descrizioneart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_famiglia", type="integer", nullable=true)
     */
    private $idFamiglia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_materiale", type="integer", nullable=true)
     */
    private $idMateriale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_materiale2", type="integer", nullable=true)
     */
    private $idMateriale2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_montaggio", type="integer", nullable=true)
     */
    private $idMontaggio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_tolleranze", type="integer", nullable=true)
     */
    private $idTolleranze;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link_disegno", type="string", length=255, nullable=true)
     */
    private $linkDisegno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notaArt", type="string", length=255, nullable=true)
     */
    private $notaart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
