<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrdini
 *
 * @ORM\Table(name="tb_ordini")
 * @ORM\Entity
 */
class TbOrdini
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ordine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdine;

    /**
     * @var string
     *
     * @ORM\Column(name="Ordine", type="string", length=13, nullable=false)
     */
    private $ordine;

    /**
     * @var string
     *
     * @ORM\Column(name="XCODIC", type="string", length=6, nullable=false)
     */
    private $xcodic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Riferimento", type="string", length=50, nullable=true)
     */
    private $riferimento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Colore", type="string", length=50, nullable=true)
     */
    private $colore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColoreCassa", type="string", length=50, nullable=true)
     */
    private $colorecassa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo", type="string", length=5, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo2", type="string", length=5, nullable=true)
     */
    private $tipo2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Applicazione", type="string", length=20, nullable=true)
     */
    private $applicazione;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QtàPersiane", type="smallint", nullable=true)
     */
    private $qtàpersiane = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="QtàTelaio", type="smallint", nullable=true, options={"comment"="telai persiana assemblati"})
     */
    private $qtàtelaio = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="QtàAnte", type="smallint", nullable=true, options={"comment"="ante persiana assemblati"})
     */
    private $qtàante = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="QtàTelaioSaldati", type="smallint", nullable=true, options={"comment"="telai persiana saldati"})
     */
    private $qtàtelaiosaldati = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="QtàAnteSaldate", type="smallint", nullable=true, options={"comment"="ante persiana saldate"})
     */
    private $qtàantesaldate = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Ferramenta", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $ferramenta = 'b\'0\'';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Inserimento", type="datetime", nullable=true)
     */
    private $dInserimento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_PreSviluppo", type="datetime", nullable=true)
     */
    private $dPresviluppo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Controllo", type="datetime", nullable=true)
     */
    private $dControllo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Sviluppo", type="datetime", nullable=true)
     */
    private $dSviluppo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Invio", type="datetime", nullable=true)
     */
    private $dInvio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Verniciatore", type="string", length=50, nullable=true)
     */
    private $verniciatore;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Rientro", type="datetime", nullable=true)
     */
    private $dRientro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Pronto", type="datetime", nullable=true)
     */
    private $dPronto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Evaso", type="datetime", nullable=true)
     */
    private $dEvaso;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_Consegna", type="datetime", nullable=true)
     */
    private $dConsegna;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="D_InvioDoc", type="datetime", nullable=true)
     */
    private $dInviodoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Note", type="text", length=16777215, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LastUser", type="string", length=20, nullable=true)
     */
    private $lastuser;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Annullato", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $annullato = 'b\'0\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DDT", type="integer", nullable=true)
     */
    private $ddt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrdineMonoblocco", type="string", length=255, nullable=true)
     */
    private $ordinemonoblocco;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NOdocCE", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $nodocce = 'b\'0\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="StopMateriali", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $stopmateriali = 'b\'0\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="StopAccessori", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $stopaccessori = 'b\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="StatusGenerale", type="string", length=255, nullable=true)
     */
    private $statusgenerale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="StopFase1", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $stopfase1 = 'b\'0\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="StopFase2", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $stopfase2 = 'b\'0\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="StatoFase1", type="integer", nullable=true)
     */
    private $statofase1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="StatoFase2", type="integer", nullable=true)
     */
    private $statofase2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastUpdate = 'CURRENT_TIMESTAMP';


}
