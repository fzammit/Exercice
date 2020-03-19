<?php

namespace App\Repository;

use App\Entity\CinemaPicture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CinemaPicture|null find($id, $lockMode = null, $lockVersion = null)
 * @method CinemaPicture|null findOneBy(array $criteria, array $orderBy = null)
 * @method CinemaPicture[]    findAll()
 * @method CinemaPicture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CinemaPictureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CinemaPicture::class);
    }

    // /**
    //  * @return CinemaPicture[] Returns an array of CinemaPicture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CinemaPicture
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
