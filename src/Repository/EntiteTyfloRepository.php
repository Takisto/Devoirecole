<?php

namespace App\Repository;

use App\Entity\EntiteTyflo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EntiteTyflo>
 *
 * @method EntiteTyflo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntiteTyflo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntiteTyflo[]    findAll()
 * @method EntiteTyflo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntiteTyfloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntiteTyflo::class);
    }

//    /**
//     * @return EntiteTyflo[] Returns an array of EntiteTyflo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EntiteTyflo
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
