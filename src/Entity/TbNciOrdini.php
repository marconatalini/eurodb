<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNciOrdini
 *
 * @ORM\Table(name="tb_nci_ordini")
 * @ORM\Entity
 */
class TbNciOrdini
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
     * @var string|null
     *
     * @ORM\Column(name="cod_operatore", type="string", length=5, nullable=true)
     */
    private $codOperatore = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_nci", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dataNci;

    /**
     * @var string|null
     *
     * @ORM\Column(name="errorein", type="string", length=0, nullable=true, options={"default"="LAVORAZIONI"})
     */
    private $errorein = 'LAVORAZIONI';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="prelievo_profili_errati", type="boolean", nullable=true)
     */
    private $prelievoProfiliErrati;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="prelievo_mancanza_barre", type="boolean", nullable=true)
     */
    private $prelievoMancanzaBarre;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="prelievo_qualita_estruso", type="boolean", nullable=true)
     */
    private $prelievoQualitaEstruso;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="taglio_barre_difettose", type="boolean", nullable=true)
     */
    private $taglioBarreDifettose;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="taglio_documenti_insufficienti", type="boolean", nullable=true)
     */
    private $taglioDocumentiInsufficienti;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lavorazioni_errore_taglio", type="boolean", nullable=true)
     */
    private $lavorazioniErroreTaglio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lavorazioni_difetti_qualita", type="boolean", nullable=true)
     */
    private $lavorazioniDifettiQualita;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lavorazioni_errore_sviluppo", type="boolean", nullable=true)
     */
    private $lavorazioniErroreSviluppo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="guarnizioni_pezzi_mancanti", type="boolean", nullable=true)
     */
    private $guarnizioniPezziMancanti;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="guarnizioni_difetti_qualita", type="boolean", nullable=true)
     */
    private $guarnizioniDifettiQualita;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="imballo_pezzi_mancanti", type="boolean", nullable=true)
     */
    private $imballoPezziMancanti;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="imballo_altro", type="boolean", nullable=true)
     */
    private $imballoAltro;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_errore_colore", type="boolean", nullable=true)
     */
    private $verniciaturaErroreColore;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_bucciato", type="boolean", nullable=true)
     */
    private $verniciaturaBucciato;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_macchie", type="boolean", nullable=true)
     */
    private $verniciaturaMacchie;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_profili_ammaccati", type="boolean", nullable=true)
     */
    private $verniciaturaProfiliAmmaccati;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_graffi", type="boolean", nullable=true)
     */
    private $verniciaturaGraffi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_aloni", type="boolean", nullable=true)
     */
    private $verniciaturaAloni;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_altro", type="boolean", nullable=true)
     */
    private $verniciaturaAltro;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_scarsa_polvere", type="boolean", nullable=true)
     */
    private $verniciaturaScarsaPolvere;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="verniciatura_impurita", type="boolean", nullable=true)
     */
    private $verniciaturaImpurita;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="controlli_profili_errati", type="boolean", nullable=true)
     */
    private $controlliProfiliErrati;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="controlli_dimensioni_errate", type="boolean", nullable=true)
     */
    private $controlliDimensioniErrate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="controlli_altro", type="boolean", nullable=true)
     */
    private $controlliAltro;

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


    private function toBool($val)
    {
        if (strtoupper($val) == 'TRUE') return true;
        if (strtoupper($val) == 'FALSE') return false;
        return $val;
    }

    /**
     * @return int
     */
    public function getIdNci()
    {
        return $this->idNci;
    }

    /**
     * @param int $idNci
     */
    public function setIdNci($idNci)
    {
        $this->idNci = $idNci;
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
    public function getErrorein()
    {
        return $this->errorein;
    }

    /**
     * @param null|string $errorein
     */
    public function setErrorein($errorein)
    {
        $this->errorein = $errorein;
    }

    /**
     * @return bool|null
     */
    public function getPrelievoProfiliErrati()
    {
        return $this->prelievoProfiliErrati;
    }

    /**
     * @param bool|null $prelievoProfiliErrati
     */
    public function setPrelievoProfiliErrati($prelievoProfiliErrati)
    {
        $this->prelievoProfiliErrati = $this->toBool($prelievoProfiliErrati);
    }

    /**
     * @return bool|null
     */
    public function getPrelievoMancanzaBarre()
    {
        return $this->prelievoMancanzaBarre;
    }

    /**
     * @param bool|null $prelievoMancanzaBarre
     */
    public function setPrelievoMancanzaBarre($prelievoMancanzaBarre)
    {
        $this->prelievoMancanzaBarre = $this->toBool($prelievoMancanzaBarre);
    }

    /**
     * @return bool|null
     */
    public function getPrelievoQualitaEstruso()
    {
        return $this->prelievoQualitaEstruso;
    }

    /**
     * @param bool|null $prelievoQualitaEstruso
     */
    public function setPrelievoQualitaEstruso($prelievoQualitaEstruso)
    {
        $this->prelievoQualitaEstruso = $this->toBool($prelievoQualitaEstruso);
    }

    /**
     * @return bool|null
     */
    public function getTaglioBarreDifettose()
    {
        return $this->taglioBarreDifettose;
    }

    /**
     * @param bool|null $taglioBarreDifettose
     */
    public function setTaglioBarreDifettose($taglioBarreDifettose)
    {
        $this->taglioBarreDifettose = $this->toBool($taglioBarreDifettose);
    }

    /**
     * @return bool|null
     */
    public function getTaglioDocumentiInsufficienti()
    {
        return $this->taglioDocumentiInsufficienti;
    }

    /**
     * @param bool|null $taglioDocumentiInsufficienti
     */
    public function setTaglioDocumentiInsufficienti($taglioDocumentiInsufficienti)
    {
        $this->taglioDocumentiInsufficienti = $this->toBool($taglioDocumentiInsufficienti);
    }

    /**
     * @return bool|null
     */
    public function getLavorazioniErroreTaglio()
    {
        return $this->lavorazioniErroreTaglio;
    }

    /**
     * @param bool|null $lavorazioniErroreTaglio
     */
    public function setLavorazioniErroreTaglio($lavorazioniErroreTaglio)
    {
        $this->lavorazioniErroreTaglio = $this->toBool($lavorazioniErroreTaglio);
    }

    /**
     * @return bool|null
     */
    public function getLavorazioniDifettiQualita()
    {
        return $this->lavorazioniDifettiQualita;
    }

    /**
     * @param bool|null $lavorazioniDifettiQualita
     */
    public function setLavorazioniDifettiQualita($lavorazioniDifettiQualita)
    {
        $this->lavorazioniDifettiQualita = $this->toBool($lavorazioniDifettiQualita);
    }

    /**
     * @return bool|null
     */
    public function getLavorazioniErroreSviluppo()
    {
        return $this->lavorazioniErroreSviluppo;
    }

    /**
     * @param bool|null $lavorazioniErroreSviluppo
     */
    public function setLavorazioniErroreSviluppo($lavorazioniErroreSviluppo)
    {
        $this->lavorazioniErroreSviluppo = $this->toBool($lavorazioniErroreSviluppo);
    }

    /**
     * @return bool|null
     */
    public function getGuarnizioniPezziMancanti()
    {
        return $this->guarnizioniPezziMancanti;
    }

    /**
     * @param bool|null $guarnizioniPezziMancanti
     */
    public function setGuarnizioniPezziMancanti($guarnizioniPezziMancanti)
    {
        $this->guarnizioniPezziMancanti = $this->toBool($guarnizioniPezziMancanti);
    }

    /**
     * @return bool|null
     */
    public function getGuarnizioniDifettiQualita()
    {
        return $this->guarnizioniDifettiQualita;
    }

    /**
     * @param bool|null $guarnizioniDifettiQualita
     */
    public function setGuarnizioniDifettiQualita($guarnizioniDifettiQualita)
    {
        $this->guarnizioniDifettiQualita = $this->toBool($guarnizioniDifettiQualita);
    }

    /**
     * @return bool|null
     */
    public function getImballoPezziMancanti()
    {
        return $this->imballoPezziMancanti;
    }

    /**
     * @param bool|null $imballoPezziMancanti
     */
    public function setImballoPezziMancanti($imballoPezziMancanti)
    {
        $this->imballoPezziMancanti = $this->toBool($imballoPezziMancanti);
    }

    /**
     * @return bool|null
     */
    public function getImballoAltro()
    {
        return $this->imballoAltro;
    }

    /**
     * @param bool|null $imballoAltro
     */
    public function setImballoAltro($imballoAltro)
    {
        $this->imballoAltro = $this->toBool($imballoAltro);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaErroreColore()
    {
        return $this->verniciaturaErroreColore;
    }

    /**
     * @param bool|null $verniciaturaErroreColore
     */
    public function setVerniciaturaErroreColore($verniciaturaErroreColore)
    {
        $this->verniciaturaErroreColore = $this->toBool($verniciaturaErroreColore);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaBucciato()
    {
        return $this->verniciaturaBucciato;
    }

    /**
     * @param bool|null $verniciaturaBucciato
     */
    public function setVerniciaturaBucciato($verniciaturaBucciato)
    {
        $this->verniciaturaBucciato = $this->toBool($verniciaturaBucciato);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaMacchie()
    {
        return $this->verniciaturaMacchie;
    }

    /**
     * @param bool|null $verniciaturaMacchie
     */
    public function setVerniciaturaMacchie($verniciaturaMacchie)
    {
        $this->verniciaturaMacchie = $this->toBool($verniciaturaMacchie);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaProfiliAmmaccati()
    {
        return $this->verniciaturaProfiliAmmaccati;
    }

    /**
     * @param bool|null $verniciaturaProfiliAmmaccati
     */
    public function setVerniciaturaProfiliAmmaccati($verniciaturaProfiliAmmaccati)
    {
        $this->verniciaturaProfiliAmmaccati = $this->toBool($verniciaturaProfiliAmmaccati);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaGraffi()
    {
        return $this->verniciaturaGraffi;
    }

    /**
     * @param bool|null $verniciaturaGraffi
     */
    public function setVerniciaturaGraffi($verniciaturaGraffi)
    {
        $this->verniciaturaGraffi = $this->toBool($verniciaturaGraffi);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaAloni()
    {
        return $this->verniciaturaAloni;
    }

    /**
     * @param bool|null $verniciaturaAloni
     */
    public function setVerniciaturaAloni($verniciaturaAloni)
    {
        $this->verniciaturaAloni = $this->toBool($verniciaturaAloni);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaAltro()
    {
        return $this->verniciaturaAltro;
    }

    /**
     * @param bool|null $verniciaturaAltro
     */
    public function setVerniciaturaAltro($verniciaturaAltro)
    {
        $this->verniciaturaAltro = $this->toBool($verniciaturaAltro);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaScarsaPolvere()
    {
        return $this->verniciaturaScarsaPolvere;
    }

    /**
     * @param bool|null $verniciaturaScarsaPolvere
     */
    public function setVerniciaturaScarsaPolvere($verniciaturaScarsaPolvere)
    {
        $this->verniciaturaScarsaPolvere = $this->toBool($verniciaturaScarsaPolvere);
    }

    /**
     * @return bool|null
     */
    public function getVerniciaturaImpurita()
    {
        return $this->verniciaturaImpurita;
    }

    /**
     * @param bool|null $verniciaturaImpurita
     */
    public function setVerniciaturaImpurita($verniciaturaImpurita)
    {
        $this->verniciaturaImpurita = $this->toBool($verniciaturaImpurita);
    }

    /**
     * @return bool|null
     */
    public function getControlliProfiliErrati()
    {
        return $this->controlliProfiliErrati;
    }

    /**
     * @param bool|null $controlliProfiliErrati
     */
    public function setControlliProfiliErrati($controlliProfiliErrati)
    {
        $this->controlliProfiliErrati = $this->toBool($controlliProfiliErrati);
    }

    /**
     * @return bool|null
     */
    public function getControlliDimensioniErrate()
    {
        return $this->controlliDimensioniErrate;
    }

    /**
     * @param bool|null $controlliDimensioniErrate
     */
    public function setControlliDimensioniErrate($controlliDimensioniErrate)
    {
        $this->controlliDimensioniErrate = $this->toBool($controlliDimensioniErrate);
    }

    /**
     * @return bool|null
     */
    public function getControlliAltro()
    {
        return $this->controlliAltro;
    }

    /**
     * @param bool|null $controlliAltro
     */
    public function setControlliAltro($controlliAltro)
    {
        $this->controlliAltro = $this->toBool($controlliAltro);
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
