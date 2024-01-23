<?php

namespace App\Repository\Archive;

use App\Entity\Archive\Abo_User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Abo_User>
 *
 * @method Abo_User|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abo_User|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abo_User[]    findAll()
 * @method Abo_User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Abo_UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abo_User::class);
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
