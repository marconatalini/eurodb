<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTelaiGuarnizione
 *
 * @ORM\Table(name="tb_telai_guarnizione")
 * @ORM\Entity
 */
class TbTelaiGuarnizione
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_telaio_guarnizione", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTelaioGuarnizione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pos", type="string", length=15, nullable=true)
     */
    private $pos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pezzi", type="smallint", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $pezzi = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lati", type="boolean", nullable=true)
     */
    private $lati = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="larghezza", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $larghezza = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="altezza", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $altezza = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="lunghezza", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lunghezza = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ordine", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ordine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lotto", type="string", length=1, nullable=true)
     */
    private $lotto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rifpos", type="string", length=45, nullable=true)
     */
    private $rifpos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codart", type="string", length=13, nullable=true)
     */
    private $codart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xcodic", type="string", length=6, nullable=true)
     */
    private $xcodic;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="saldata", type="boolean", nullable=true)
     */
    private $saldata;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
