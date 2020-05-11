<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbGeneraleEuroschede
 *
 * @ORM\Table(name="tb_generale_euroschede")
 * @ORM\Entity
 */
class TbGeneraleEuroschede
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valTXT", type="string", length=255, nullable=true)
     */
    private $valtxt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valINT", type="integer", nullable=true)
     */
    private $valint;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="valBOOL", type="boolean", nullable=true)
     */
    private $valbool;

    /**
     * @var float|null
     *
     * @ORM\Column(name="valSINGLE", type="float", precision=10, scale=0, nullable=true)
     */
    private $valsingle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
