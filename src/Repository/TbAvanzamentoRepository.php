<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbAvanzamento;
use App\Entity\TbDescrizioniFasiProduzione;
use App\Entity\TbDipendenti;
use App\Entity\TbOrdinila;
use App\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\FetchMode;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\Expr;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbAvanzamento|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbAvanzamento|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbAvanzamento[]    findAll()
 * @method TbAvanzamento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbAvanzamentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbAvanzamento::class);
    }

    public function findBySearchQueryBuilder(string $fromDate, string $toDate, TbDipendenti $dipendente = null,
                                 TbDescrizioniFasiProduzione $lavorazione = null,
                                 string $numero = null, string $lotto = null)
    {
        $qb = $this->createQueryBuilder('a')
            ->setMaxResults(400);

        if ($dipendente) {
            $qb->andWhere('a.codiceOperatore = :dipendente')
                ->setParameter('dipendente' , $dipendente);
        }

        if ($lavorazione) {
            $qb->andWhere('a.codiceFase = :lavorazione')
                ->setParameter('lavorazione' , $lavorazione);
        }

        if ($numero) {
            $qb->andWhere('a.numeroOrdine = :numero')
                ->setParameter('numero' , $numero)
                ->orderBy('a.lottoOrdine')
                ->addOrderBy('a.timestamp', 'DESC');
        } else {
            $qb->andWhere('a.timestamp >= :fromDate')
                ->andWhere('a.timestamp <= :toDate')
                ->setParameter('fromDate', $fromDate)
                ->setParameter('toDate', $toDate . ' 23:59:59')
                ->orderBy('a.timestamp', 'DESC');
        }

        if ($lotto) {
            $qb->andWhere('a.lottoOrdine = :lotto')
                ->setParameter('lotto', $lotto);
        }

//        dd($qb->getQuery());
        return $qb;
    }


    public function findByOldSearch(int $page = 1, string $registerDate, string $codiceFase, int $limit = TbAvanzamento::MAX_RESULT)
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.timestamp >= :dateInizio')
            ->andwhere('a.timestamp <= :dateFine')
            ->setParameter('dateInizio', $registerDate)
            ->setParameter('dateFine', $registerDate . ' 23:59:59');

        if ($codiceFase !== ''){
            $qb->andWhere('a.codiceFase = :codiceFase')
                ->setParameter('codiceFase', $codiceFase);
        }

        $qb
            ->orderBy('a.timestamp', 'DESC')
            ->setMaxResults($limit);

        return (new Paginator($qb, 50))->paginate($page);
    }

    public function findRegistrazioniOggiQueryBuilder()
    {
        return $this->createQueryBuilder('a')
            ->where('a.timestamp >= :oggi')
            ->setParameter('oggi', new \DateTime('today'))
            ->orderBy('a.timestamp', "DESC")
            ;
    }

    public function findRegistrazioniOggi()
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.timestamp >= :oggi')
            ->setParameter('oggi', new \DateTime('today'))
            ->orderBy('a.timestamp', "DESC")
            ;

        return (new Paginator($qb))->paginate(1);

    }

    public function findRegistrazioniOggiOperatore($operatore)
    {

        return $this->createQueryBuilder('a')
            ->addSelect('o, d, s')
//            ->addSelect('a.numeroOrdine, a.lottoOrdine, a.timestamp, a.inizioFine')
//            ->addSelect('o.finitura, o.nCornici, o.nComplementari, o.nTagli')
//            ->addSelect('d.idDipendente, d.descrizione')
            ->leftJoin(TbDipendenti::class, 'd', Expr\Join::WITH, ('a.codiceOperatore = d.idDipendente'))
            ->leftJoin(TbDescrizioniFasiProduzione::class, 's', Expr\Join::WITH, ('a.codiceFase = s.codiceFase'))
            ->leftJoin(TbOrdinila::class , 'o', Expr\Join::WITH, '(o.numero = a.numeroOrdine AND o.lotto = a.lottoOrdine)')
            ->where('a.timestamp >= :oggi')
//            ->andWhere('a.inizioFine = true')
            ->andWhere('a.codiceOperatore = :operatore')
            ->andWhere('a.numeroOrdine != :ordinePulizia')
            ->setParameter('oggi', new \DateTime('today'))
            ->setParameter('ordinePulizia', 999999)
            ->setParameter('operatore', $operatore)
            ->getQuery()
            ->getResult(Query::HYDRATE_SCALAR)
            ;
    }

    public function findRegistrazioniOrdine($numero, $lotto)
    {
        return $this->createQueryBuilder('a')
            ->select('a.numeroOrdine, a.lottoOrdine, a.timestamp, a.inizioFine')
            ->addSelect('d.idDipendente, d.descrizione as operatore, f.descrizione')
            ->leftJoin(TbDipendenti::class , 'd', Expr\Join::WITH, '(a.codiceOperatore = d.idDipendente)')
            ->leftJoin(TbDescrizioniFasiProduzione::class , 'f', Expr\Join::WITH, '(a.codiceFase = f.codiceFase)')
            ->where('a.numeroOrdine = :numero')
            ->andWhere('a.lottoOrdine = :lotto')
            ->setParameter('numero', $numero)
            ->setParameter('lotto', $lotto)
            ->orderBy('a.timestamp', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findOrdiniCianfrinatura()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "select * from 
(SELECT t1.numero_ordine as numeroOrdine, t1.lotto_ordine as lottoOrdine FROM 
    (SELECT DISTINCT numero_ordine, lotto_ordine FROM tb_avanzamento WHERE codice_fase = 'A1' and
    inizio_fine = 1 AND timestamp > date_sub(current_date(), INTERVAL 90 DAY) and concat(numero_ordine,lotto_ordine)
    not in (
    SELECT concat(numero_ordine, lotto_ordine) FROM tb_avanzamento WHERE codice_fase = 'C2' and 
    inizio_fine = 1 AND timestamp > date_sub(current_date(), INTERVAL 90 DAY))) as t1
inner join
    (select numero, lotto from tb_ordinila where n_cornici > 0 and scp = 'C' and xcdcol like 'FL%' and 
    data_finito is null and data_annullato is null order by xcdcol) as t2 on (t1.numero_ordine = 
    t2.numero and t1.lotto_ordine = t2.lotto) group by numero_ordine, lotto_ordine) as t3
inner join
    (select numero as a_numeroOrdine, lotto as a_lottoOrdine, finitura as o_finitura, scp as o_scp, n_cornici as o_nCornici, 
    n_complementari as o_nComplementari, n_tagli as o_nTagli, n_lavorazioni_CNC as o_nLavorazioniCnc, xcdcol
    FROM tb_ordinila) as t4 on (t3.numeroOrdine = t4.a_numeroOrdine and t3.lottoOrdine = t4.a_lottoOrdine) order by t4.xcdcol;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findOrdiniCNC()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "select * from 
(SELECT t1.numero_ordine as numeroOrdine, t1.lotto_ordine as lottoOrdine FROM
    (SELECT DISTINCT numero_ordine, lotto_ordine FROM tb_avanzamento WHERE codice_fase = 'A1' and
    inizio_fine = 1 AND timestamp > date_sub(current_date(), INTERVAL 90 DAY) 
    union all 
    SELECT DISTINCT numero_ordine, lotto_ordine FROM tb_avanzamento WHERE codice_fase = 'C1' and 
    inizio_fine = 0 AND timestamp > date_sub(current_date(), INTERVAL 90 DAY)) as t1
inner join
    (select numero, lotto from tb_ordinila where n_lavorazioni_CNC > 0 and 
    data_finito is null and data_annullato is null order by data_scadenza_produzione) as t2 on (t1.numero_ordine = 
    t2.numero and t1.lotto_ordine = t2.lotto) group by numero_ordine, lotto_ordine) as t3
inner join
    (select numero as a_numeroOrdine, lotto as a_lottoOrdine, finitura as o_finitura, scp as o_scp, n_cornici as o_nCornici, 
    n_complementari as o_nComplementari, n_tagli as o_nTagli, n_lavorazioni_CNC as o_nLavorazioniCnc, xcdcol
    FROM tb_ordinila) as t4 on (t3.numeroOrdine = t4.a_numeroOrdine and t3.lottoOrdine = t4.a_lottoOrdine) order by t4.xcdcol;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findOrdiniVerniciatura()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "select * from 
(SELECT t1.numero_ordine as numeroOrdine, t1.lotto_ordine as lottoOrdine FROM
    (SELECT DISTINCT numero_ordine, lotto_ordine FROM tb_avanzamento WHERE codice_fase = 'A1' and
    inizio_fine = 1 AND timestamp > date_sub(current_date(), INTERVAL 90 DAY) 
    union all 
    SELECT DISTINCT numero_ordine, lotto_ordine FROM tb_avanzamento WHERE codice_fase = 'V1' and 
    inizio_fine = 0 AND timestamp > date_sub(current_date(), INTERVAL 90 DAY)) as t1
inner join
    (select numero, lotto from tb_ordinila where upper(finitura) not like 'GREZZO' and scp = 'S' and xcdcol not like 'FL%' 
    and data_finito is null and data_annullato is null order by xcdcol) as t2 on (t1.numero_ordine = 
    t2.numero and t1.lotto_ordine = t2.lotto) group by numero_ordine, lotto_ordine) as t3
inner join
    (select numero as a_numeroOrdine, lotto as a_lottoOrdine, finitura as o_finitura, scp as o_scp, n_cornici as o_nCornici, 
    n_complementari as o_nComplementari, n_tagli as o_nTagli, n_lavorazioni_CNC as o_nLavorazioniCnc, xcdcol
    FROM tb_ordinila) as t4 on (t3.numeroOrdine = t4.a_numeroOrdine and t3.lottoOrdine = t4.a_lottoOrdine) order by t4.xcdcol;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findTempiOrdine($numero, $lotto)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "select f.descrizione, a.codice_fase, sum(a.secondi) as secondiSum 
from tb_avanzamento a join tb_descrizioni_fasi_produzione f on (a.codice_fase = f.codice_fase) 
where a.numero_ordine = :numeroOrdine and a.lotto_ordine = :lottoOrdine and a.secondi > 1 group by a.codice_fase;";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'numeroOrdine' => $numero,
            'lottoOrdine' => $lotto
        ]);
        return $stmt->fetchAll();
    }

    public function findNoteOrdine($numero, $lotto)
    {
        $qb = $this->createQueryBuilder('a')
            ->join('a.codiceOperatore', 'd')
            ->select('a.numeroOrdine, a.lottoOrdine, a.note, d.descrizione, a.timestamp')
            ->where('a.numeroOrdine = :numero')
            ->andWhere('a.lottoOrdine = :lotto')
            ->setParameter('numero', $numero)
            ->setParameter('lotto', $lotto)
            ;

        $orX = $qb->expr()->gt($qb->expr()->length('a.note'),0);

        return $qb
            ->andWhere($orX)
            ->getQuery()
            ->getResult()
            ;


    }
}