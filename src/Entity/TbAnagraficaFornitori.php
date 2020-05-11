<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbAnagraficaFornitori
 *
 * @ORM\Table(name="tb_anagrafica_fornitori")
 * @ORM\Entity
 */
class TbAnagraficaFornitori
{
    /**
     * @var string
     *
     * @ORM\Column(name="XFLAGA", type="string", length=1, nullable=false)
     */
    private $xflaga;

    /**
     * @var string
     *
     * @ORM\Column(name="XCODIC", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xcodic;

    /**
     * @var string
     *
     * @ORM\Column(name="XDSANA", type="string", length=30, nullable=false)
     */
    private $xdsana;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XDSAN1", type="string", length=30, nullable=true)
     */
    private $xdsan1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XINDIR", type="string", length=30, nullable=true)
     */
    private $xindir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLCCAP", type="string", length=5, nullable=true)
     */
    private $clccap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XLOCAL", type="string", length=25, nullable=true)
     */
    private $xlocal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XPROVI", type="string", length=2, nullable=true)
     */
    private $xprovi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XNAZIO", type="string", length=3, nullable=true)
     */
    private $xnazio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLNFAX", type="string", length=12, nullable=true)
     */
    private $clnfax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLDEMA", type="string", length=60, nullable=true)
     */
    private $cldema;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLNTEL", type="string", length=12, nullable=true)
     */
    private $clntel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XAGEN1", type="string", length=2, nullable=true)
     */
    private $xagen1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ExtraFax", type="string", length=255, nullable=true)
     */
    private $extrafax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telefono", type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLNPRT", type="string", length=4, nullable=true)
     */
    private $clnprt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLNPRF", type="string", length=4, nullable=true)
     */
    private $clnprf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="XPAIVA", type="string", length=11, nullable=true)
     */
    private $xpaiva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
