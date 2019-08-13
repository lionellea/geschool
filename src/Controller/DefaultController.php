<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Tranche;
use App\Entity\Inscription;
use App\Entity\Pansion;
use App\Repository\EleveRepository;
use App\Repository\TrancheRepository;
use App\Repository\InscriptionRepository;
use App\Repository\PansionRepository;
use App\Repository\AnneeRepository;
use App\Repository\SalleRepository;
use App\Repository\ClasseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Options;
use Dompdf\Dompdf;

class DefaultController extends AbstractController
{
    // page d'accueil
    /**
     * @Route("/", name="accueil", methods={"GET"})
     */
    public function index(
        EleveRepository $eleveRepository,
        SalleRepository $salleRepository,
        ClasseRepository $classeRepository,
        InscriptionRepository $inscriptionRepository
    ): Response
    {
        return $this->render('accueil.html.twig', [
            'eleves' => $eleveRepository->findAll(),
            'salles' => $salleRepository->findAll(),
            'inscris' => $inscriptionRepository->findAll(),  
        ]);
    }

    /**
     * @Route("/parametre", name="parametre", methods={"GET"})
     */
    public function parametre(): Response
    {
        return $this->render('annee/new.html.twig');
    }

   // liste des eleves par salle
    /**
     * @Route("/eleve/salle/{id}", name="eleve_salle", methods={"GET","POST"})
     */
    public function liste(
        Request $request,
        $id,
        EleveRepository $eleveRepository,
        InscriptionRepository $nscriptionRepository,
        AnneeRepository $anneeRepository

    ){
        
        $eleves = $eleveRepository->eleve_salle($id);
       
         $annee = $anneeRepository->AnneeEnCours();
         $inscrit = $nscriptionRepository->findByAnnee($annee);
         
       //var_dump(count($noninscrit)); die;
        return $this->render('eleve_salle.html.twig', [
            'eleves' => $eleves,
            'inscrits' => $inscrit,
        ]);
       
    }

     /**
     * @Route("/eleve/salle/{id}", name="eleve_salle", methods={"GET","POST"})
     */
    public function elevenoninscrits(
        Request $request,
        $id,
        EleveRepository $eleveRepository,
        InscriptionRepository $nscriptionRepository,
        AnneeRepository $anneeRepository

    ){
        
        $eleves = $eleveRepository->eleve_salle($id);
       
         $annee = $anneeRepository->AnneeEnCours();
         $inscrit = $nscriptionRepository->findByAnnee($annee);
         
       //var_dump(count($noninscrit)); die;
        return $this->render('eleve_salle.html.twig', [
            'eleves' => $eleves,
            'inscrits' => $inscrit,
        ]);
       
    }

    /**
     * @Route("/eleve/inscrit/{id}", name="eleve_inscrits", methods={"GET","POST"})
     */
    public function eleveinscrits(
        Request $request,
        $id,
        InscriptionRepository $nscriptionRepository,
        AnneeRepository $anneeRepository

    ){
        
         $annee = $anneeRepository->AnneeEnCours();
         $inscrit = $nscriptionRepository->eleve_inscrit($id, $annee);
        //var_dump( $inscrit); die;
        return $this->render('eleve_inscrit.html.twig', [
            'inscrits' => $inscrit,
        ]);
       
    }

    /**
     * @Route("/inscrire/{id}", name="inscrire", methods={"GET","POST"})
     */
    public function inscrire(Request $request, $id): Response
    {
        /*$curi = $request->get("curi");
        , "curi": app.request.uri*/
        return $this->render('inscription.html.twig', [
            'id' => $id,
        ]);
    }

    // inscription d'un élève avec generation du recu
    /**
     * @Route("/inscription", name="inscription", methods={"GET","POST"})
     */
    public function inscription(Request $request,
     EleveRepository $eleveRepository,
    AnneeRepository $anneeRepository,
    InscriptionRepository $inscriptionRepository): Response
    {
        if($request->getMethod() == 'GET')
        {
              $em = $this->getDoctrine()->getManager();

          $montant = intVal($request->get("montant"));
          $id = $request->get("id");
          //var_dump($id); die();
          if($eleve = $eleveRepository->findOneById($id)){
            $salle = $eleve->getSalle();
            $annee = $anneeRepository->AnneeEnCours();
            //var_dump($existe); die;  
            $inscription = null;
            if(! $inscription = $inscriptionRepository->verifie_inscrit($eleve, $salle, $annee))
            {
                $inscription = new Inscription();
                $inscription->setCode($inscriptionRepository->genCode($eleve->getMatricule()))
                    ->setMontant($montant)
                    ->setEleve($eleve)
                    ->setSalle($salle)
                    ->setAnnee($annee);

                $em->persist($inscription);
                $em->flush($inscription);

                $em1 = $this->getDoctrine()->getManager();
                $eleve->setEtatInscription(true);
                $em1->persist($eleve);
                $em1->flush($eleve);

                
                $options = new Options();
                $options->set('isRemoteEnabled', TRUE);
                $dompdf = new Dompdf($options);
                $html = $this->render('recu.html.twig', [
                    'eleve' => $eleve,
                ]);
                $dompdf->loadHtml($html);
                $dompdf->render();
                return ($dompdf->stream("mypdf.pdf", [
                    "Attachment" => false
                ]));

        //var_dump($libelle); die;
          // return $this->redirectToRoute('eleve_salle', ["id"=>$salle->getId()]);
            }else{
                $options = new Options();
                $options->set('isRemoteEnabled', TRUE);
                $dompdf = new Dompdf($options);
                return $html = $this->render('recu.html.twig', [
                    'inscription' => $inscription,
                ]);
                $dompdf->loadHtml($html);
                $dompdf->render();
                return ($dompdf->stream("mypdf.pdf", [
                    "Attachment" => false
                ]));
            }
          }
        }
    }
   // camptabilite des inscription
    /**
     * @Route("/comptabilite/inscription", name="compta_inscription", methods={"GET","POST"})
     */
    public function compta_inscription(Request $request,
    InscriptionRepository $inscriptionRepository): Response
    {
        $inscrits = $inscriptionRepository->findAll();
        
        //var_dump($total_montant); die;
        return $this->render('liste_inscription.html.twig', [
            'inscrits' => $inscrits,
        ]);
    }
   
    /**
     * @Route("/tranche/{id}", name="pay_tranche", methods={"GET","POST"})
     */
    public function tranche(Request $request, EleveRepository $eleveRepository, $id, PansionRepository $pansionRepository,TrancheRepository $trancheRepository): Response
    {
        if($eleve = $eleveRepository->findOneById($id)){
            $salle = $eleve->getSalle();
            $classe = $salle->getClasse();
            $pansion = $pansionRepository->findOneBy(['eleve' => $eleve, 'salle' => $salle], ['id' => 'DESC']);
            $tranches = null;

            if($pansion)
                $tranches = $trancheRepository->findBy(['pansions' => $pansion]);

            if($request->getMethod() == 'GET' && ($request->get("montant") || $request->get("montantT"))){
                $montant = intVal($request->get("montant"));
                $id = $request->get("id");
                if(! $pansion){
                    $em = $this->getDoctrine()->getManager();
                    $montantT = $request->get("montantT");

                    $pansion = new Pansion();
                    $pansion->setMontant($montantT)
                        ->setEleve($eleve)
                        ->setSalle($salle)
                        ->setDatePaiement(new \DateTime('now'));

                    $em->persist($pansion);
                    $em->flush($pansion);
                }

                $em = $this->getDoctrine()->getManager();
                
                $tranche = new Tranche();
                $tranche->setCode($trancheRepository->genCode($eleve->getMatricule()))
                    ->setMontant($montant);

                $em->persist($tranche);
                $em->flush($tranche);
            }

            return $this->render('pay_tranche.html.twig', [
                'eleve' => $eleve,
                'salle' => $salle,
                'classe' => $classe,
                'pansion' => $pansion,
                'tranches' => $tranches
            ]);
        }else{
            return null;
        }
    }
}
