<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AchatRevue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AchatRevue>
 *
 * @method AchatRevue|null find($id, $lockMode = null, $lockVersion = null)
 * @method AchatRevue|null findOneBy(array $criteria, array $orderBy = null)
 * @method AchatRevue[]    findAll()
 * @method AchatRevue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AchatRevueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AchatRevue::class);
    }

//    /**
//     * @return AchatRevue[] Returns an array of AchatRevue objects
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

//    public function findOneBySomeField($value): ?AchatRevue
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
