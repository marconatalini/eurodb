<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbEurostepErrorLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbEurostepErrorLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbEurostepErrorLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbEurostepErrorLog[]    findAll()
 * @method TbEurostepErrorLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbEurostepErrorLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbEurostepErrorLog::class);
    }

    public function getErroriOggi(){

        return $this->createQueryBuilder('e')
            ->where('e.timestamp >= :oggi')
            ->setParameter('oggi', new \DateTime('today'))
            ->orderBy('e.timestamp', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }
}