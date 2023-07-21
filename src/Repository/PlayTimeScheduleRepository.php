<?php

namespace App\Repository;

use App\Entity\PlayTimeSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PlayTimeSchedule>
 *
 * @method PlayTimeSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayTimeSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayTimeSchedule[]    findAll()
 * @method PlayTimeSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayTimeScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayTimeSchedule::class);
    }

//    /**
//     * @return PlayTimeSchedule[] Returns an array of PlayTimeSchedule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PlayTimeSchedule
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
