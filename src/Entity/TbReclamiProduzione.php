<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbReclamiProduzione
 *
 * @ORM\Table(name="tb_reclami_produzione")
 * @ORM\Entity
 */
class TbReclamiProduzione
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_file", type="string", length=45, nullable=false)
     */
    private $nomeFile;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_ordine", type="integer", nullable=false)
     */
    private $numeroOrdine;

    /**
     * @var string
     *
     * @ORM\Column(name="lotto_ordine", type="string", length=1, nullable=false)
     */
    private $lottoOrdine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commento", type="string", length=200, nullable=true)
     */
    private $commento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codice_operatore", type="string", length=45, nullable=true)
     */
    private $codiceOperatore;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_nc", type="integer", nullable=true)
     */
    private $idNc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
