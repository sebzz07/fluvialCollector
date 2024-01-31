<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AboSaisie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AboSaisie>
 *
 * @method AboSaisie|null find($id, $lockMode = null, $lockVersion = null)
 * @method AboSaisie|null findOneBy(array $criteria, array $orderBy = null)
 * @method AboSaisie[]    findAll()
 * @method AboSaisie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AboSaisieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AboSaisie::class);
    }

//    /**
//     * @return AboSaisie[] Returns an array of AboSaisie objects
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

//    public function findOneBySomeField($value): ?AboSaisie
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
