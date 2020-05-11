<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNotenc
 *
 * @ORM\Table(name="tb_notenc", indexes={@ORM\Index(name="ID_nc_idx", columns={"ID_nc"})})
 * @ORM\Entity
 */
class TbNotenc
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
     * @ORM\Column(name="D_nota", type="datetime", nullable=true)
     */
    private $dNota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UserNotaNC", type="string", length=30, nullable=true)
     */
    private $usernotanc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TestoNota", type="string", length=255, nullable=true)
     */
    private $testonota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \TbNc
     *
     * @ORM\ManyToOne(targetEntity="TbNc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_nc", referencedColumnName="ID_nc")
     * })
     */
    private $idNc;


}
