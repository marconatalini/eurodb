<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbNc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbNc|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbNc|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbNc[]    findAll()
 * @method TbNc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbNcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbNc::class);
    }

    public function findMaxNumero($tipo)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql= "select max(NumeroNC) as numero from tb_nc where ((RI = '{$tipo}') AND (year(D_NC) = year(curdate())))";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $numero =  $stmt->fetchAll()[0]['numero'];

        return $numero +1;

    }

    public function findNomeRilevatore($cod_operatore)
    {
        try {
            $dql = "select d.descrizione from App\Entity\TbDipendenti d where d.idDipendente = ?1";

            $operatore = $this->_em->createQuery($dql)
                ->setParameter(1, $cod_operatore)
                ->getSingleScalarResult();

            $dql = "select r.idRilevatorenc from App\Entity\TbRilevatorinc r where r.rilevatore = ?1";

            return $this->_em->createQuery($dql)
                ->setParameter(1, $operatore)
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    public function findXcodic($ordine, $lotto)
    {
        $dql = "SELECT o.xcodic from App\Entity\TbOrdinila o where o.numero = ?1 and o.lotto = ?2";

        return $this->_em->createQuery($dql)
            ->setParameter(1, $ordine)
            ->setParameter(2, $lotto)
            ->getSingleScalarResult();
    }
}