<?php

namespace App\Repository;

use App\Entity\Army;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Army>
 *
 * @method Army|null find($id, $lockMode = null, $lockVersion = null)
 * @method Army|null findOneBy(array $criteria, array $orderBy = null)
 * @method Army[]    findAll()
 * @method Army[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmyRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Army::class);
    }

    public function save(Army $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Army $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function countT5Players()
    {


        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('COUNT(a.id)')
            ->from('App\Entity\Army', 'a')
            ->where($qb->expr()->orX(
                $qb->expr()->gte('a.T5Infantry', 0),
                $qb->expr()->gte('a.T5Cavalry', 0),
                $qb->expr()->gte('a.T5Fly', 0),
                $qb->expr()->gte('a.T5Mage', 0),
                $qb->expr()->gte('a.T5Marksmen', 0)
            ));

        return $qb->getQuery()->getSingleScalarResult();
    }

//    /**
//     * @return Army[] Returns an array of Army objects
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

//    public function findOneBySomeField($value): ?Army
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

//        public function findAllByUserID($userId){
//            $query = $this->createQueryBuilder('a');
//            $query->select('a')
//                  ->where('a.user = :user')
//                  ->setParameter('user',$userId);
//
//            return $query->getQuery()->getResult();
//
//
//        }
}
