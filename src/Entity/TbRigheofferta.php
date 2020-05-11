<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbRigheofferta
 *
 * @ORM\Table(name="tb_righeofferta", indexes={@ORM\Index(name="ID_offerta_idx", columns={"ID_offerta"})})
 * @ORM\Entity
 */
class TbRigheofferta
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_RigaOfferta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRigaofferta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EtichettaRiga", type="string", length=10, nullable=true)
     */
    private $etichettariga;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Pezzi", type="smallint", nullable=true)
     */
    private $pezzi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="F_PF", type="string", length=2, nullable=true)
     */
    private $fPf;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Ante", type="boolean", nullable=true)
     */
    private $ante;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Apertura", type="string", length=10, nullable=true)
     */
    private $apertura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="L", type="smallint", nullable=true)
     */
    private $l;

    /**
     * @var int|null
     *
     * @ORM\Column(name="H", type="smallint", nullable=true)
     */
    private $h;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prezzo", type="float", precision=10, scale=0, nullable=true)
     */
    private $prezzo = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrezzoTelaio", type="float", precision=10, scale=0, nullable=true)
     */
    private $prezzotelaio = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Extra", type="float", precision=10, scale=0, nullable=true)
     */
    private $extra = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="CostoGriglia", type="float", precision=10, scale=0, nullable=true)
     */
    private $costogriglia = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ExtraPercentuale", type="float", precision=10, scale=0, nullable=true)
     */
    private $extrapercentuale = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ExtraValore", type="float", precision=10, scale=0, nullable=true)
     */
    private $extravalore = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \TbOfferte
     *
     * @ORM\ManyToOne(targetEntity="TbOfferte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_offerta", referencedColumnName="ID_offerta")
     * })
     */
    private $idOfferta;


}
