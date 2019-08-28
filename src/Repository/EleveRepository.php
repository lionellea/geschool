<?php

namespace App\Repository;

use App\Entity\Eleve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Eleve|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eleve|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eleve[]    findAll()
 * @method Eleve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EleveRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Eleve::class);
    }

    // /**
    //  * @return Eleve[] Returns an array of Eleve objects
    //  */

    //matricule LIKE 'PF00118'
    public function genMat($section, $dateDebut)
    {
        $matricule = "";
        if(strcasecmp($section, "francophone") == 0){
            $matricule = "PF";
        }elseif(strcasecmp($section, "anglophone") == 0){
            $matricule = "PA";
        }elseif(strcasecmp($section, "bilingue") == 0){
            $matricule = "PB";
        }
if(
        $tmp = $this->createQueryBuilder('e')
            ->andWhere('e.matricule LIKE :mat')
            ->setParameter('mat', $matricule."%".date("y", $dateDebut))
            ->orderBy('e.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()){
                $tmp = str_split($tmp->getMatricule(), 2);
                $matricule .= str_pad(intval($tmp[1].$tmp[2])+1, 4, "0", STR_PAD_LEFT).date("y", $dateDebut);
            }else{
                $matricule .= "0001".date("y", $dateDebut);
            }
        return $matricule;
    }

    public function eleve_salle($id)
    {
       return $this->createQueryBuilder('e')
        ->orderBy('e.id', 'DESC')
        ->join("e.salle", "s")
        ->andwhere("s.id = :salle")
        ->setParameter("salle", $id)
        ->getQuery()
        ->getResult();
    }

    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()

            
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eleve
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
