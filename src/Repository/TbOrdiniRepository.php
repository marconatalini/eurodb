<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbOrdini;
use App\Entity\TbAnagraficaCliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbOrdini|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbOrdini|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbOrdini[]    findAll()
 * @method TbOrdini[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbOrdiniRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbOrdini::class);
    }

    public function getCliente($numero, $lotto)
    {
        $qb = $this->createQueryBuilder('o')
            ->select('c.xdsana')
            ->leftJoin(TbAnagraficaCliente::class, 'c', Expr\Join::WITH, ('o.xcodic = c.xcodic'))
            ->where('o.ordine = :numeroOrdine')
            ->setParameter('numeroOrdine', $numero.'_'.$lotto)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
            ;

        return $qb;
    }
}