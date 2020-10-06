<?php

namespace App\Repository;

use App\Entity\UserHasAchat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserHasAchat|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserHasAchat|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserHasAchat[]    findAll()
 * @method UserHasAchat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserHasAchatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserHasAchat::class);
    }

    // /**
    //  * @return UserHasAchat[] Returns an array of UserHasAchat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserHasAchat
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
