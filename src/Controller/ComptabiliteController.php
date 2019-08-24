<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Tranche;
use App\Entity\Inscription;
use App\Entity\Pansion;
use App\Repository\AcheterRepository;
use App\Repository\AnneeRepository;
use App\Repository\DepenseRepository;
use App\Repository\EleveRepository;
use App\Repository\InscriptionRepository;
use App\Repository\PansionRepository;
use App\Repository\TrancheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comptabilite")
 */
class ComptabiliteController extends AbstractController
{
    /**
     * @Route("/", name="comptabilite", methods={"GET","POST"})
     */
    public function index()
    {
        return $this->redirectToRoute('compta_inscription');
    }

    /**
     * @Route("/inscription", name="compta_inscription", methods={"GET","POST"})
     */
    public function compta_inscription(Request $request,
        InscriptionRepository $inscriptionRepository,
        AnneeRepository $anneeRepository): Response
    {
        $annee = $anneeRepository->AnneeEnCours();
        $inscrits = $inscriptionRepository->findByAnnee($annee);
        $eleve = array();
        $montant = 0;

        foreach($inscrits as $val){
            $eleve[] = [
                "nom" => $val->getEleve()->getNom(),
                "prenom" => $val->getEleve()->getPrenom(),
                "matricule" => $val->getEleve()->getMatricule(),
                "salle" => $val->getSalle()->getLibelle(),
                "datei" => $val->getDateInscription(),
                "montant" => $val->getMontant(),
                "tmontant" => $montant += $val->getMontant(),
            ];
        }
        
        return $this->render('liste_inscription.html.twig', [
            'eleves' => $eleve,
        ]);
    }

    /**
     * @Route("/accessoires", name="compta_accessoire", methods={"GET","POST"})
     */
    public function compta_accessoire(Request $request,
        AcheterRepository $acheterRepository,
        AnneeRepository $anneeRepository): Response
    {
        $annee = $anneeRepository->AnneeEnCours();
        
        $accessoires = $acheterRepository->findByAnnee($annee);
        $eleve = array();
        $montant = 0;
        $i = 0;

        foreach($accessoires as $val){
            $eleve[] = [
                "nom" => $val->getEleve()->getNom(),
                "prenom" => $val->getEleve()->getPrenom(),
                "matricule" => $val->getEleve()->getMatricule(),
                "salle" => $val->getEleve()->getSalle()->getLibelle(),
                "accessoire" => $val->getAccessoire()->getLibelle(),
                "datei" => $val->getDateAchat(),
                "montant" => $val->getPrix(),
                "tmontant" => $montant += $val->getPrix(),
            ];
        }
        
        return $this->render('liste_accessoire.html.twig', [
            'eleves' => $eleve,
        ]);
    }

    /**
     * @Route("/depenses", name="compta_depense", methods={"GET","POST"})
     */
    public function compta_depense(Request $request,
        DepenseRepository $depenseRepository,
        AnneeRepository $anneeRepository): Response
    {
        $annee = $anneeRepository->AnneeEnCours();
        
        $dep = $depenseRepository->findByAnnee($annee);
        $depenses = array();
        $montant = 0;

        foreach($dep as $val){
            $depenses[] = [
                "libelle" => $val->getLibelle(),
                "montant" => $val->getMontant(),
                "datee" => $val->getDateEnreg(),
                "tmontant" => $montant += $val->getMontant(),
            ];
        }
        
        return $this->render('liste_depense.html.twig', [
            'depenses' => $depenses,
        ]);
    }

    /**
     * @Route("/pansions", name="compta_pansion", methods={"GET","POST"})
     */
    public function compta_pansion(Request $request,
        PansionRepository $pansionRepository,
        AnneeRepository $anneeRepository): Response
    {
        $annee = $anneeRepository->AnneeEnCours();
        
        $dep = $pansionRepository->findByAnnee($annee);
        $pansions = array();
        $montant = 0;

        foreach($dep as $val){
            // $tranches = [];
            // foreach ($val->getTranches() as $tranche) {
            //     $tranches[] = [
            //         "code" =>$tranche->getCode(),
            //         "montant" =>$tranche->getMontant(),
            //     ];
            // }
            $pansions[] = [
                "libelle" => $val->getEleve()->getMatricule(),
                "montant" => $val->getMontant(),
                "datee" => $val->getDatePaiement(),
                "momtantV" => $val->getMontantVerser(),
                "reste" => $val->getReste(),
                "montantT" => $montant += $val->getMontantVerser(),
                // "tranches" => $val->getTranch(),
            ];
        }
        
        return $this->render('comptabilite/pansion.html.twig', [
            'pansions' => $pansions,
        ]);
    }
}
