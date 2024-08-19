<?php

namespace App\Repository\Archive;

use App\Entity\Archive\Acastelem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Acastelem>
 *
 * @method Acastelem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Acastelem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Acastelem[]    findAll()
 * @method Acastelem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcastelemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Acastelem::class);
    }

//    /**
//     * @return Acastelem[] Returns an array of Acastelem objects
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

//    public function findOneBySomeField($value): ?Acastelem
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
