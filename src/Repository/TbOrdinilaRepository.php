<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbAvanzamento;
use App\Entity\TbOrdinila;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbOrdinila|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbOrdinila|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbOrdinila[]    findAll()
 * @method TbOrdinila[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbOrdinilaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbOrdinila::class);
    }

}