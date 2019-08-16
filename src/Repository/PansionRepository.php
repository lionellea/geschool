<?php

namespace App\Repository;

use App\Entity\Pansion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pansion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pansion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pansion[]    findAll()
 * @method Pansion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PansionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pansion::class);
    }

    // /**
    //  * @return Pansion[] Returns an array of Pansion objects
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
    public function findOneBySomeField($value): ?Pansion
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
