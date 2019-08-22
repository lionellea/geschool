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
    public function genCode($eleve){
        $code = 'T';
        $num = 1;
        if($tranche = $this->createQueryBuilder('t')
            ->orderBy('t.id', 'DESC')
            ->andWhere('t.eleve = :eleve')
            ->setParameter('eleve', $eleve)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()){
                if(preg_match('/T([0-9]*)S([0-9]*)(.*)/', $tranche->getCode(), $num) == 1 && strcasecmp($num[2], date('y')) == 0 && strcasecmp($num[3], $eleve->getMatricule()) == 0)
                    $num = intval($num[1])+1;
            }
        return $code.str_pad($num, 2, '0', STR_PAD_LEFT).'S'.date('y').$eleve->getMatricule();
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
