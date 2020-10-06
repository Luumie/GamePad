<?php

namespace App\Repository;

use App\Entity\PasseModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PasseModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method PasseModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method PasseModule[]    findAll()
 * @method PasseModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PasseModuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PasseModule::class);
    }

    // /**
    //  * @return PasseModule[] Returns an array of PasseModule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PasseModule
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
