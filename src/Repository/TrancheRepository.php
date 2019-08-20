<?php

namespace App\Repository;

use App\Entity\Tranche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tranche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tranche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tranche[]    findAll()
 * @method Tranche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrancheRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tranche::class);
    }

    //code LIKE 'T01S18PF00118'
    public function genCode($matricule){
        $code = 'T';
        $num = 0;
        if($tranche = $this->createQueryBuilder('t')
            ->orderBy('t.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()){
                if(preg_match('/T([0-9]*)S([0-9]*).*/', $tranche[0]->getCode(), $num) == 1 && strcasecmp($num[2], date('y')) == 0)
                    $num = intval($num[1])+1;
                else
                    $num = 0;

                $code .=  str_pad($num, 2, '0', STR_PAD_LEFT);
            }else{
                $code .= '01';
            }
        return $code.'S'.date('y').$matricule;
    }

    // /**
    //  * @return Tranche[] Returns an array of Tranche objects
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
    public function findOneBySomeField($value): ?Tranche
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
