<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbDipendenti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbDipendenti|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbDipendenti|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbDipendenti[]    findAll()
 * @method TbDipendenti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbDipendentiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbDipendenti::class);
    }

}