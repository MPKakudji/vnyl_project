<?php

namespace App\Repository;

use App\Entity\PricingPlanBenifit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PricingPlanBenifit>
 *
 * @method PricingPlanBenifit|null find($id, $lockMode = null, $lockVersion = null)
 * @method PricingPlanBenifit|null findOneBy(array $criteria, array $orderBy = null)
 * @method PricingPlanBenifit[]    findAll()
 * @method PricingPlanBenifit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PricingPlanBenifitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PricingPlanBenifit::class);
    }

//    /**
//     * @return PricingPlanBenifit[] Returns an array of PricingPlanBenifit objects
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

//    public function findOneBySomeField($value): ?PricingPlanBenifit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
