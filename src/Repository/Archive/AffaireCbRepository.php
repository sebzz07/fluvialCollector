<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AffaireCb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AffaireCb>
 *
 * @method AffaireCb|null find($id, $lockMode = null, $lockVersion = null)
 * @method AffaireCb|null findOneBy(array $criteria, array $orderBy = null)
 * @method AffaireCb[]    findAll()
 * @method AffaireCb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffaireCbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AffaireCb::class);
    }

//    /**
//     * @return AffaireCb[] Returns an array of AffaireCb objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AffaireCb
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
