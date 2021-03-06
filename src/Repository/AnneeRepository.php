<?php

namespace App\Repository;

use App\Entity\Annee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Annee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annee[]    findAll()
 * @method Annee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnneeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Annee::class);
    }

    // /**
    //  * @return Annee[] Returns an array of Annee objects
    //  */

    public function verifAnnee($dateDebut, $dateFin)
    {
      
        $date = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->andWhere('a.dateFin = :df')
            ->setParameter('df', $dateFin)
            ->andWhere('a.dateDebut = :dd')
            ->setParameter('dd', $dateDebut)
            ->getQuery()
            ->getResult();
     
            return $date;
    }


    public function AnneeEnCours()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    
    public function LastAnnee()
    {
      $annee = "";
        $date = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
     
            $annee = $date[0]->getDateDebut();
            return $annee;
         

    }
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
    public function findOneBySomeField($value): ?Annee
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
