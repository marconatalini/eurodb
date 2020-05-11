<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNoteordine
 *
 * @ORM\Table(name="tb_noteordine", indexes={@ORM\Index(name="ID_ordine_idx", columns={"ID_ordine"})})
 * @ORM\Entity
 */
class TbNoteordine
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_nota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNota;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataNota", type="datetime", nullable=true)
     */
    private $datanota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=true)
     */
    private $nota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserNota", type="string", length=13, nullable=true)
     */
    private $usernota;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_RepNota", type="integer", nullable=true)
     */
    private $idRepnota;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \TbOrdini
     *
     * @ORM\ManyToOne(targetEntity="TbOrdini")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ordine", referencedColumnName="ID_ordine")
     * })
     */
    private $idOrdine;


}
