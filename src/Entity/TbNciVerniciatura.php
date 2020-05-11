<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNciVerniciatura
 *
 * @ORM\Table(name="tb_nci_verniciatura")
 * @ORM\Entity
 */
class TbNciVerniciatura
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nci", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNci;

    /**
     * @var int
     *
     * @ORM\Column(name="id_nc", type="integer", nullable=false, options={"comment"="ID dalla tabella NC generica"})
     */
    private $idNc;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_nci", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dataNci;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_operatore", type="string", length=5, nullable=true)
     */
    private $codOperatore = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="xcdcol", type="string", length=6, nullable=true, options={"comment"="Codice colore come da tabella AS400"})
     */
    private $xcdcol = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dataora_verniciatura", type="datetime", nullable=true)
     */
    private $dataoraVerniciatura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marca_polvere", type="string", length=45, nullable=true)
     */
    private $marcaPolvere = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_agganciatore1", type="string", length=5, nullable=true)
     */
    private $codAgganciatore1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_agganciatore2", type="string", length=5, nullable=true)
     */
    private $codAgganciatore2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_agganciatore3", type="string", length=5, nullable=true)
     */
    private $codAgganciatore3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_verniciatore1", type="string", length=5, nullable=true)
     */
    private $codVerniciatore1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_verniciatore2", type="string", length=5, nullable=true)
     */
    private $codVerniciatore2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_verniciatore3", type="string", length=5, nullable=true)
     */
    private $codVerniciatore3 = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="difetto_telai", type="boolean", nullable=true)
     */
    private $difettoTelai;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="difetto_complementari", type="boolean", nullable=true)
     */
    private $difettoComplementari;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="difetto_lamiere", type="boolean", nullable=true)
     */
    private $difettoLamiere;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="difetto_bugne", type="boolean", nullable=true)
     */
    private $difettoBugne;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="difetto_barre", type="boolean", nullable=true)
     */
    private $difettoBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="difettoin", type="string", length=0, nullable=true, options={"default"="ENTRATA"})
     */
    private $difettoin = 'ENTRATA';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="de_profili_errati", type="boolean", nullable=true, options={"comment"="difetto entrata"})
     */
    private $deProfiliErrati;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="de_profili_deformati", type="boolean", nullable=true, options={"comment"="difetto entrata"})
     */
    private $deProfiliDeformati;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="de_profili_ammaccati", type="boolean", nullable=true, options={"comment"="difetto entrata"})
     */
    private $deProfiliAmmaccati;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="de_levigatura", type="boolean", nullable=true, options={"comment"="difetto entrata"})
     */
    private $deLevigatura;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="de_mancanza_fori", type="boolean", nullable=true, options={"comment"="difetto entrata"})
     */
    private $deMancanzaFori;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_troppa_polvere", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duTroppaPolvere;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_bucciato", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duBucciato;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_aloni", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duAloni;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_scarsa_polvere", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duScarsaPolvere;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_impurita", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duImpurita;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_errore_colore", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duErroreColore;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_angolo_interno_non_verniciato", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duAngoloInternoNonVerniciato;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_cava_telaio_non_verniciata", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duCavaTelaioNonVerniciata;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_bolle_vernice", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duBolleVernice;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_crateri", type="boolean", nullable=true)
     */
    private $duCrateri;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_tracce_silicone", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duTracceSilicone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_macchie_acqua", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duMacchieAcqua;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_occhi_pernice", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duOcchiPernice;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_punte_spillo", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duPunteSpillo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_graffi", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duGraffi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_cadute_impianto", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duCaduteImpianto;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="du_altro", type="boolean", nullable=true, options={"comment"="difetto uscita"})
     */
    private $duAltro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_nci", type="text", length=255, nullable=true)
     */
    private $noteNci;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soluzione", type="text", length=255, nullable=true)
     */
    private $soluzione;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_soluzione", type="date", nullable=true)
     */
    private $dataSoluzione;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="chiusa", type="boolean", nullable=true)
     */
    private $chiusa;

    public function __construct()
    {
        $this->dataNci = new \DateTime();
    }


    /**
     * @return int
     */
    public function getIdNci()
    {
        return $this->idNci;
    }


    /**
     * @return int
     */
    public function getIdNc()
    {
        return $this->idNc;
    }

    /**
     * @param int $idNc
     */
    public function setIdNc($idNc)
    {
        $this->idNc = $idNc;
    }

    /**
     * @return int
     */
    public function getNumeroOrdine()
    {
        return $this->numeroOrdine;
    }

    /**
     * @param int $numeroOrdine
     */
    public function setNumeroOrdine($numeroOrdine)
    {
        $this->numeroOrdine = $numeroOrdine;
    }

    /**
     * @return string
     */
    public function getLottoOrdine()
    {
        return $this->lottoOrdine;
    }

    /**
     * @param string $lottoOrdine
     */
    public function setLottoOrdine($lottoOrdine)
    {
        $this->lottoOrdine = $lottoOrdine;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataNci()
    {
        return $this->dataNci;
    }

    /**
     * @param \DateTime|null $dataNci
     */
    public function setDataNci($dataNci)
    {
        $this->dataNci = $dataNci;
    }

    /**
     * @return null|string
     */
    public function getCodOperatore()
    {
        return $this->codOperatore;
    }

    /**
     * @param null|string $codOperatore
     */
    public function setCodOperatore($codOperatore)
    {
        $this->codOperatore = $codOperatore;
    }

    /**
     * @return null|string
     */
    public function getXcdcol()
    {
        return $this->xcdcol;
    }

    /**
     * @param null|string $xcdcol
     */
    public function setXcdcol($xcdcol)
    {
        $this->xcdcol = $xcdcol;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataoraVerniciatura()
    {
        return $this->dataoraVerniciatura;
    }

    /**
     * @param \DateTime|null $dataoraVerniciatura
     */
    public function setDataoraVerniciatura($dataoraVerniciatura)
    {
        $this->dataoraVerniciatura = $dataoraVerniciatura;
    }

    /**
     * @return null|string
     */
    public function getMarcaPolvere()
    {
        return $this->marcaPolvere;
    }

    /**
     * @param null|string $marcaPolvere
     */
    public function setMarcaPolvere($marcaPolvere)
    {
        $this->marcaPolvere = $marcaPolvere;
    }

    /**
     * @return null|string
     */
    public function getCodAgganciatore1()
    {
        return $this->codAgganciatore1;
    }

    /**
     * @param null|string $codAgganciatore1
     */
    public function setCodAgganciatore1($codAgganciatore1)
    {
        $this->codAgganciatore1 = $codAgganciatore1;
    }

    /**
     * @return null|string
     */
    public function getCodAgganciatore2()
    {
        return $this->codAgganciatore2;
    }

    /**
     * @param null|string $codAgganciatore2
     */
    public function setCodAgganciatore2($codAgganciatore2)
    {
        $this->codAgganciatore2 = $codAgganciatore2;
    }

    /**
     * @return null|string
     */
    public function getCodAgganciatore3()
    {
        return $this->codAgganciatore3;
    }

    /**
     * @param null|string $codAgganciatore3
     */
    public function setCodAgganciatore3($codAgganciatore3)
    {
        $this->codAgganciatore3 = $codAgganciatore3;
    }

    /**
     * @return null|string
     */
    public function getCodVerniciatore1()
    {
        return $this->codVerniciatore1;
    }

    /**
     * @param null|string $codVerniciatore1
     */
    public function setCodVerniciatore1($codVerniciatore1)
    {
        $this->codVerniciatore1 = $codVerniciatore1;
    }

    /**
     * @return null|string
     */
    public function getCodVerniciatore2()
    {
        return $this->codVerniciatore2;
    }

    /**
     * @param null|string $codVerniciatore2
     */
    public function setCodVerniciatore2($codVerniciatore2)
    {
        $this->codVerniciatore2 = $codVerniciatore2;
    }

    /**
     * @return null|string
     */
    public function getCodVerniciatore3()
    {
        return $this->codVerniciatore3;
    }

    /**
     * @param null|string $codVerniciatore3
     */
    public function setCodVerniciatore3($codVerniciatore3)
    {
        $this->codVerniciatore3 = $codVerniciatore3;
    }

    /**
     * @return bool|null
     */
    public function getDifettoTelai()
    {
        return $this->difettoTelai;
    }

    private function toBool($val)
    {
        if (strtoupper($val) == 'TRUE') return true;
        if (strtoupper($val) == 'FALSE') return false;
        return $val;
    }


    /**
     * @param bool|null $difettoTelai
     */
    public function setDifettoTelai($difettoTelai)
    {
        $this->difettoTelai = $this->toBool($difettoTelai);
    }

    /**
     * @return bool|null
     */
    public function getDifettoComplementari()
    {
        return $this->difettoComplementari;
    }

    /**
     * @param bool|null $difettoComplementari
     */
    public function setDifettoComplementari($difettoComplementari)
    {
        $this->difettoComplementari = $this->toBool($difettoComplementari);
    }

    /**
     * @return bool|null
     */
    public function getDifettoLamiere()
    {
        return $this->difettoLamiere;
    }

    /**
     * @param bool|null $difettoLamiere
     */
    public function setDifettoLamiere($difettoLamiere)
    {
        $this->difettoLamiere = $this->toBool($difettoLamiere);
    }

    /**
     * @return bool|null
     */
    public function getDifettoBugne()
    {
        return $this->difettoBugne;
    }

    /**
     * @param bool|null $difettoBugne
     */
    public function setDifettoBugne($difettoBugne)
    {
        $this->difettoBugne = $this->toBool($difettoBugne);
    }

    /**
     * @return bool|null
     */
    public function getDifettoBarre()
    {
        return $this->difettoBarre;
    }

    /**
     * @param bool|null $difettoBarre
     */
    public function setDifettoBarre($difettoBarre)
    {
        $this->difettoBarre = $this->toBool($difettoBarre);
    }

    /**
     * @return null|string
     */
    public function getDifettoin()
    {
        return $this->difettoin;
    }

    /**
     * @param null|string $difettoin
     */
    public function setDifettoin($difettoin)
    {
        $this->difettoin = $difettoin;
    }

    /**
     * @return bool|null
     */
    public function getDeProfiliErrati()
    {
        return $this->deProfiliErrati;
    }

    /**
     * @param bool|null $deProfiliErrati
     */
    public function setDeProfiliErrati($deProfiliErrati)
    {
        $this->deProfiliErrati = $this->toBool($deProfiliErrati);
    }

    /**
     * @return bool|null
     */
    public function getDeProfiliDeformati()
    {
        return $this->deProfiliDeformati;
    }

    /**
     * @param bool|null $deProfiliDeformati
     */
    public function setDeProfiliDeformati($deProfiliDeformati)
    {
        $this->deProfiliDeformati = $this->toBool($deProfiliDeformati);
    }

    /**
     * @return bool|null
     */
    public function getDeProfiliAmmaccati()
    {
        return $this->deProfiliAmmaccati;
    }

    /**
     * @param bool|null $deProfiliAmmaccati
     */
    public function setDeProfiliAmmaccati($deProfiliAmmaccati)
    {
        $this->deProfiliAmmaccati = $this->toBool($deProfiliAmmaccati);
    }

    /**
     * @return bool|null
     */
    public function getDeLevigatura()
    {
        return $this->deLevigatura;
    }

    /**
     * @param bool|null $deLevigatura
     */
    public function setDeLevigatura($deLevigatura)
    {
        $this->deLevigatura = $this->toBool($deLevigatura);
    }

    /**
     * @return bool|null
     */
    public function getDeMancanzaFori()
    {
        return $this->deMancanzaFori;
    }

    /**
     * @param bool|null $deMancanzaFori
     */
    public function setDeMancanzaFori($deMancanzaFori)
    {
        $this->deMancanzaFori = $this->toBool($deMancanzaFori);
    }

    /**
     * @return bool|null
     */
    public function getDuTroppaPolvere()
    {
        return $this->duTroppaPolvere;
    }

    /**
     * @param bool|null $duTroppaPolvere
     */
    public function setDuTroppaPolvere($duTroppaPolvere)
    {
        $this->duTroppaPolvere = $this->toBool($duTroppaPolvere);
    }

    /**
     * @return bool|null
     */
    public function getDuBucciato()
    {
        return $this->duBucciato;
    }

    /**
     * @param bool|null $duBucciato
     */
    public function setDuBucciato($duBucciato)
    {
        $this->duBucciato = $this->toBool($duBucciato);
    }

    /**
     * @return bool|null
     */
    public function getDuAloni()
    {
        return $this->duAloni;
    }

    /**
     * @param bool|null $duAloni
     */
    public function setDuAloni($duAloni)
    {
        $this->duAloni = $this->toBool($duAloni);
    }

    /**
     * @return bool|null
     */
    public function getDuScarsaPolvere()
    {
        return $this->duScarsaPolvere;
    }

    /**
     * @param bool|null $duScarsaPolvere
     */
    public function setDuScarsaPolvere($duScarsaPolvere)
    {
        $this->duScarsaPolvere = $this->toBool($duScarsaPolvere);
    }

    /**
     * @return bool|null
     */
    public function getDuImpurita()
    {
        return $this->duImpurita;
    }

    /**
     * @param bool|null $duImpurita
     */
    public function setDuImpurita($duImpurita)
    {
        $this->duImpurita = $this->toBool($duImpurita);
    }

    /**
     * @return bool|null
     */
    public function getDuErroreColore()
    {
        return $this->duErroreColore;
    }

    /**
     * @param bool|null $duErroreColore
     */
    public function setDuErroreColore($duErroreColore)
    {
        $this->duErroreColore = $this->toBool($duErroreColore);
    }

    /**
     * @return bool|null
     */
    public function getDuAngoloInternoNonVerniciato()
    {
        return $this->duAngoloInternoNonVerniciato;
    }

    /**
     * @param bool|null $duAngoloInternoNonVerniciato
     */
    public function setDuAngoloInternoNonVerniciato($duAngoloInternoNonVerniciato)
    {
        $this->duAngoloInternoNonVerniciato = $this->toBool($duAngoloInternoNonVerniciato);
    }

    /**
     * @return bool|null
     */
    public function getDuCavaTelaioNonVerniciata()
    {
        return $this->duCavaTelaioNonVerniciata;
    }

    /**
     * @param bool|null $duCavaTelaioNonVerniciata
     */
    public function setDuCavaTelaioNonVerniciata($duCavaTelaioNonVerniciata)
    {
        $this->duCavaTelaioNonVerniciata = $this->toBool($duCavaTelaioNonVerniciata);
    }

    /**
     * @return bool|null
     */
    public function getDuBolleVernice()
    {
        return $this->duBolleVernice;
    }

    /**
     * @param bool|null $duBolleVernice
     */
    public function setDuBolleVernice($duBolleVernice)
    {
        $this->duBolleVernice = $this->toBool($duBolleVernice);
    }

    /**
     * @return bool|null
     */
    public function getDuCrateri()
    {
        return $this->duCrateri;
    }

    /**
     * @param bool|null $duCrateri
     */
    public function setDuCrateri($duCrateri)
    {
        $this->duCrateri = $this->toBool($duCrateri);
    }

    /**
     * @return bool|null
     */
    public function getDuTracceSilicone()
    {
        return $this->duTracceSilicone;
    }

    /**
     * @param bool|null $duTracceSilicone
     */
    public function setDuTracceSilicone($duTracceSilicone)
    {
        $this->duTracceSilicone = $this->toBool($duTracceSilicone);
    }

    /**
     * @return bool|null
     */
    public function getDuMacchieAcqua()
    {
        return $this->duMacchieAcqua;
    }

    /**
     * @param bool|null $duMacchieAcqua
     */
    public function setDuMacchieAcqua($duMacchieAcqua)
    {
        $this->duMacchieAcqua = $this->toBool($duMacchieAcqua);
    }

    /**
     * @return bool|null
     */
    public function getDuOcchiPernice()
    {
        return $this->duOcchiPernice;
    }

    /**
     * @param bool|null $duOcchiPernice
     */
    public function setDuOcchiPernice($duOcchiPernice)
    {
        $this->duOcchiPernice = $this->toBool($duOcchiPernice);
    }

    /**
     * @return bool|null
     */
    public function getDuPunteSpillo()
    {
        return $this->duPunteSpillo;
    }

    /**
     * @param bool|null $duPunteSpillo
     */
    public function setDuPunteSpillo($duPunteSpillo)
    {
        $this->duPunteSpillo = $this->toBool($duPunteSpillo);
    }

    /**
     * @return bool|null
     */
    public function getDuGraffi()
    {
        return $this->duGraffi;
    }

    /**
     * @param bool|null $duGraffi
     */
    public function setDuGraffi($duGraffi)
    {
        $this->duGraffi = $this->toBool($duGraffi);
    }

    /**
     * @return bool|null
     */
    public function getDuCaduteImpianto()
    {
        return $this->duCaduteImpianto;
    }

    /**
     * @param bool|null $duCaduteImpianto
     */
    public function setDuCaduteImpianto($duCaduteImpianto)
    {
        $this->duCaduteImpianto = $this->toBool($duCaduteImpianto);
    }

    /**
     * @return bool|null
     */
    public function getDuAltro()
    {
        return $this->duAltro;
    }

    /**
     * @param bool|null $duAltro
     */
    public function setDuAltro($duAltro)
    {
        $this->duAltro = $this->toBool($duAltro);
    }

    /**
     * @return null|string
     */
    public function getNoteNci()
    {
        return $this->noteNci;
    }

    /**
     * @param null|string $noteNci
     */
    public function setNoteNci($noteNci)
    {
        $this->noteNci = $noteNci;
    }

    /**
     * @return null|string
     */
    public function getSoluzione()
    {
        return $this->soluzione;
    }

    /**
     * @param null|string $soluzione
     */
    public function setSoluzione($soluzione)
    {
        $this->soluzione = $soluzione;
    }

    /**
     * @return \DateTime|null
     */
    public function getDataSoluzione()
    {
        return $this->dataSoluzione;
    }

    /**
     * @param \DateTime|null $dataSoluzione
     */
    public function setDataSoluzione($dataSoluzione)
    {
        $this->dataSoluzione = $dataSoluzione;
    }

    /**
     * @return bool|null
     */
    public function getChiusa()
    {
        return $this->chiusa;
    }

    /**
     * @param bool|null $chiusa
     */
    public function setChiusa($chiusa)
    {
        $this->chiusa = $this->toBool($chiusa);
    }


}
