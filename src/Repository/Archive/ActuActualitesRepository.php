<?php

namespace App\Repository\Archive;

use App\Entity\Archive\ActuActualites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ActuActualites>
 *
 * @method ActuActualites|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActuActualites|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActuActualites[]    findAll()
 * @method ActuActualites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActuActualitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActuActualites::class);
    }

//    /**
//     * @return ActuActualites[] Returns an array of ActuActualites objects
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

//    public function findOneBySomeField($value): ?ActuActualites
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
