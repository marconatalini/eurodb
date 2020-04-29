<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 11/04/2020
 * Time: 10:24
 */

namespace App\Repository;

use App\Entity\TbDescrizioniFasiProduzione;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbDescrizioniFasiProduzione|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbDescrizioniFasiProduzione|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbDescrizioniFasiProduzione[]    findAll()
 * @method TbDescrizioniFasiProduzione[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TbDescrizioniFasiProduzioneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbDescrizioniFasiProduzione::class);
    }

}