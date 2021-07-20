<?php

namespace App\Repository;

use App\Entity\LatLng;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LatLng|null find($id, $lockMode = null, $lockVersion = null)
 * @method LatLng|null findOneBy(array $criteria, array $orderBy = null)
 * @method LatLng[]    findAll()
 * @method LatLng[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LatLngRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LatLng::class);
    }

    // /**
    //  * @return LatLng[] Returns an array of LatLng objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LatLng
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
