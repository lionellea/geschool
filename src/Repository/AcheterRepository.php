<?php

namespace App\Repository;

use App\Entity\Acheter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Acheter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Acheter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Acheter[]    findAll()
 * @method Acheter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcheterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Acheter::class);
    }

    //code LIKE 'ACH00001S18'
    public function genCode(){
        $code = 'ACH';
        $num = 1;
        if($achat = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()){
                if(preg_match('/ACH([0-9]*)S([0-9]*)/', $achat->getCode(), $num) && strcasecmp($num[2], date('y')) == 0)
                    $num = intval($num[1])+1;
        }
        return $code.str_pad($num, 5, '0', STR_PAD_LEFT).'S'.date('y');
    }
    // /**
    //  * @return Acheter[] Returns an array of Acheter objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Acheter
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
