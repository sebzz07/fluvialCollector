<?php

namespace App\Repository\Archive;

use App\Entity\Archive\AboWeb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AboWeb>
 *
 * @method AboWeb|null find($id, $lockMode = null, $lockVersion = null)
 * @method AboWeb|null findOneBy(array $criteria, array $orderBy = null)
 * @method AboWeb[]    findAll()
 * @method AboWeb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AboWebRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AboWeb::class);
    }

//    /**
//     * @return AboWeb[] Returns an array of AboWeb objects
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

//    public function findOneBySomeField($value): ?AboWeb
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
