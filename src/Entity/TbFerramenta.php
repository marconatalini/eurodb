<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbFerramenta
 *
 * @ORM\Table(name="tb_ferramenta")
 * @ORM\Entity
 */
class TbFerramenta
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Ordine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdine;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CerniereSTD", type="boolean", nullable=true)
     */
    private $cernierestd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CardiniSTD", type="boolean", nullable=true)
     */
    private $cardinistd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ChiusureSTD", type="boolean", nullable=true)
     */
    private $chiusurestd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CerniereAltro", type="string", length=50, nullable=true)
     */
    private $cernierealtro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CardiniAltro", type="string", length=50, nullable=true)
     */
    private $cardinialtro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ChiusureAltro", type="string", length=50, nullable=true)
     */
    private $chiusurealtro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
