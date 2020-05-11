<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbListeordinipersonali
 *
 * @ORM\Table(name="tb_listeordinipersonali")
 * @ORM\Entity
 */
class TbListeordinipersonali
{
    /**
     * @var int
     *
     * @ORM\Column(name="Ordinamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ordinamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ID_ListaOrdini", type="string", length=255, nullable=true)
     */
    private $idListaordini;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sqlString", type="text", length=16777215, nullable=true)
     */
    private $sqlstring;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ID_user", type="string", length=20, nullable=true)
     */
    private $idUser;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="OpenARG", type="boolean", nullable=true)
     */
    private $openarg;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="OpenARG2", type="boolean", nullable=true)
     */
    private $openarg2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pass-through", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $passThrough = 'b\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
