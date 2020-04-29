<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbLog[]    findAll()
 * @method TbLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbLog::class);
    }

}