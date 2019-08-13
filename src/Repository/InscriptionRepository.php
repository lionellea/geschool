<?php

namespace App\Repository;

use App\Entity\Inscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Inscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inscription[]    findAll()
 * @method Inscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Inscription::class);
    }

    //code LIKE 'INS01S18PF00118'
    public function genCode($matricule){
        $code = 'INS';
        if($tranche = $this->createQueryBuilder('t')
            ->orderBy('t.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()){
                preg_replace('/T(.*)S.*/', $tranche->getCode(), $num);
                $num = intval($num[1])+1;
                $code .=  str_pad($mun, 2, '0', STR_PAD_LEFT);
            }else{
                $code .= '01';
            }
        return $code.'S'.date('y').$matricule;
    }

    public function verifie_inscrit($eleve, $salle, $annee): ?Inscription
    {
        return  $this->createQueryBuilder('i')
            ->andWhere('i.eleve = :eleve')
            ->setParameter('eleve', $eleve)
            ->andWhere('i.salle = :salle')
            ->setParameter('salle', $salle)
            ->andWhere('i.annee = :annee')
            ->setParameter('annee', $annee)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    // /**
    //  * @return Inscription[] Returns an array of Inscription objects
    //  */
    public function eleve_inscrit($salle, $anne)
    {
       return $this->createQueryBuilder('i')
        ->orderBy('i.id', 'DESC')
        ->join("i.salle", "s")
        ->andwhere("s.id = :salle")
        ->setParameter("salle", $salle)
        ->join("i.annee", "a")
        ->andwhere("a.id = :annee")
        ->setParameter("annee", $anne)
        ->getQuery()
        ->getResult()
    
        ;
    }

    public function eleve_annee($eleve, $anne)
    {
       return $this->createQueryBuilder('i')
        ->orderBy('i.id', 'DESC')
        ->join("i.eleve", "e")
        ->andWhere("e.id = :eleve")
        ->setParameter("eleve", $eleve)
        ->join("i.annee", "a")
        ->andWhere("a.id = :annee")
        ->setParameter("annee", $anne)
        ->getQuery()
        ->getResult()
    
        ;
    }

    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inscription
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
