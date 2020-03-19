<?php

namespace App\Repository;

use App\Entity\Cinema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cinema|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cinema|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cinema[]    findAll()
 * @method Cinema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CinemaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cinema::class);
    }

    /**
     * @return Cinema[] Returns an array of Cinema objects
     *
    */
    public function findLastTenElements()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Cinema
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
