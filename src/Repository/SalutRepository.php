<?php

namespace App\Repository;

use App\Entity\Salut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Salut|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salut|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salut[]    findAll()
 * @method Salut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salut::class);
    }

    // /**
    //  * @return Salut[] Returns an array of Salut objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Salut
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
