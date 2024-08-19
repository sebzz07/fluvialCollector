<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AboUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AboUser>
 *
 * @method AboUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method AboUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method AboUser[]    findAll()
 * @method AboUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AboUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AboUser::class);
    }

//    /**
//     * @return AboUser[] Returns an array of AboUser objects
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

//    public function findOneBySomeField($value): ?AboUser
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
