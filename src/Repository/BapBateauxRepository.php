<?php

namespace App\Repository;

use App\Entity\Archive\BapBateaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BapBateaux>
 *
 * @method BapBateaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method BapBateaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method BapBateaux[]    findAll()
 * @method BapBateaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BapBateauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BapBateaux::class);
    }

//    /**
//     * @return BapBateaux[] Returns an array of BapBateaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BapBateaux
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
