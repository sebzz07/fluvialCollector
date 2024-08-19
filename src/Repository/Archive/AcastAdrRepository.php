<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AcastAdr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AcastAdr>
 *
 * @method AcastAdr|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcastAdr|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcastAdr[]    findAll()
 * @method AcastAdr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcastAdrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AcastAdr::class);
    }

//    /**
//     * @return AcastAdr[] Returns an array of AcastAdr objects
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

//    public function findOneBySomeField($value): ?AcastAdr
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
