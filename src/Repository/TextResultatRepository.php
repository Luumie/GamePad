<?php

namespace App\Repository;

use App\Entity\TextResultat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TextResultat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TextResultat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TextResultat[]    findAll()
 * @method TextResultat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextResultatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TextResultat::class);
    }

    // /**
    //  * @return TextResultat[] Returns an array of TextResultat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TextResultat
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
