<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AgeTexte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AgeTexte>
 *
 * @method AgeTexte|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgeTexte|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgeTexte[]    findAll()
 * @method AgeTexte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgeTexteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgeTexte::class);
    }

//    /**
//     * @return AgeTexte[] Returns an array of AgeTexte objects
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

//    public function findOneBySomeField($value): ?AgeTexte
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
