<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Tranche;
use App\Entity\Inscription;
use App\Entity\Pansion;
use App\Repository\AcheterRepository;
use App\Repository\AnneeRepository;
use App\Repository\EleveRepository;
use App\Repository\DepenseRepository;
use App\Repository\TrancheRepository;
use App\Repository\InscriptionRepository;
use App\Repository\PansionRepository;
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
   
         $nbf = 0; 
         $nbg = 0;
         $i = 0; $j = 0;

         foreach($eleves as $val){
            if($val->getSexe() == "feminin")
            {
                $nbf = $nbf + 1; 
            }else{
                $nbg = $nbg + 1;
            }
         }
        // var_dump($i); die();
        return $this->render('eleve_salle.html.twig', [
            'eleves' => $eleves,
            'inscrits' => $inscrit,
            'nbf' => $nbf,
            'nbg' => $nbg
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

     /**
     * @Route("/eleve/non-inscrits/{id}", name="eleve_noninscrit", methods={"GET","POST"})
     */
    public function elevenoninscrit(
        Request $request,
        $id,
        EleveRepository $eleveRepository,
        InscriptionRepository $nscriptionRepository,
        AnneeRepository $anneeRepository

    ){
        
        $eleves = $eleveRepository->eleve_salle($id);
       
         $annee = $anneeRepository->AnneeEnCours();
       //var_dump(count($noninscrit), count($inscrit), count($eleves)); die;
        return $this->render('non_inscrit.html.twig', [
            'eleves' => $eleves,
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
            if($eleve = $eleveRepository->findOneById($id)){
                $salle = $eleve->getSalle();
                $annee = $anneeRepository->AnneeEnCours();
                $inscription = $inscriptionRepository->verifie_inscrit($eleve, $salle, $annee);
                if(!$inscription)
                {
                    $inscription = new Inscription();
                    $inscription->setCode($inscriptionRepository->genCode($eleve))
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

                    $context = stream_context_create([ 
                        'ssl' => [ 
                            'verify_peer' => FALSE, 
                            'verify_peer_name' => FALSE,
                            'allow_self_signed'=> TRUE
                        ] 
                    ]);

                    $dompdf->setHttpContext($context);

                    $html = $this->renderView('print_recu_inscription.html.twig', [
                        'inscription' => $inscription,
                    ]);
                    $dompdf->loadHtml($html);
                    $dompdf->setPaper('A5', 'landscape');

                    try{
                        $dompdf->render();
                        return new Response($dompdf->stream($inscription->getCode().".pdf", ["Attachment" => false]), 200, array('Content-Type' => 'application/pdf'));
                    }catch(Exception $ex){
                        die($ex);
                    }
                }else{
                    $options = new Options();
                    $options->set('isRemoteEnabled', TRUE);
                    
                    $dompdf = new Dompdf($options);

                    $context = stream_context_create([ 
                        'ssl' => [ 
                            'verify_peer' => FALSE, 
                            'verify_peer_name' => FALSE,
                            'allow_self_signed'=> TRUE
                        ] 
                    ]);

                    $dompdf->setHttpContext($context);

                    $html = $this->renderView('print_recu_inscription.html.twig', [
                        'inscription' => $inscription,
                    ]);
                    $dompdf->loadHtml($html);
                    $dompdf->setPaper('A5', 'landscape');

                    try{
                        $dompdf->render();
                        return new Response($dompdf->stream($inscription->getCode().".pdf", ["Attachment" => false]), 200, array('Content-Type' => 'application/pdf'));
                    }catch(Exception $ex){
                        die($ex);
                    }
                }
            }
        }
        return null;
    }

     /**
     * @Route("/imprimer_liste", name="imprime_liste", methods={"GET","POST"})
     */
    public function imprime_liste(Request $request,
    EleveRepository $eleveRepository,
    SalleRepository  $salleRepository
    ): Response
    {

        $id = $request->get("id");
        
        $ids = $id{strlen($id)-1};
        $salle = $salleRepository->findOneById( $ids);
        $libelle = $salle->getLibelle();

       $eleves = $eleveRepository->eleve_salle($ids);
       //var_dump($eleves); die;
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);

        $context = stream_context_create([ 
            'ssl' => [ 
                'verify_peer' => FALSE, 
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
            ] 
        ]);

        $dompdf->setHttpContext($context);
        $html = $this->renderView('liste_eleve_pdf.html.twig', [
            'eleves' => $eleves,
            'libelle' => $libelle,
        ]);
        $dompdf->loadHtml($html); 
        $dompdf->setPaper('A4', 'landscape');

                try{
                    $dompdf->render();
                    return new Response($dompdf->stream("liste.pdf", ["Attachment" => false]), 200, array('Content-Type' => 'application/pdf'));
                }catch(Exception $ex){
                    die($ex);
                }       
       
    
    }
 /**
     * @Route("/tranche/{id}", name="pay_tranche", methods={"GET","POST"})
     */
    public function tranche(Request $request, $id,
    EleveRepository $eleveRepository,
    PansionRepository $pansionRepository,
    TrancheRepository $trancheRepository,
    AnneeRepository $anneeRepository): Response
    {
        if($eleve = $eleveRepository->findOneById($id)){
            $em = $this->getDoctrine()->getManager();

            $salle = $eleve->getSalle();
            $classe = $salle->getClasse();
            $annee = $anneeRepository->AnneeEnCours();
            $pansion = $pansionRepository->findOneBy(['eleve' => $eleve, 'annee' => $annee, 'salle' => $salle], ['id' => 'DESC']);
            $tranche = null;
            $tranches = null;

            if($pansion)
                $tranches = $trancheRepository->findBy(['pansion' => $pansion]);

            if($request->getMethod() == 'GET' && ($request->get("montant") || $request->get("montantT"))){
                $montant = intVal($request->get("montant"));
                $id = $request->get("id");
                if(! $pansion){
                    $montantT = $request->get("montantT");

                    $pansion = new Pansion();
                        $pansion->setMontant($montantT)
                        ->setEleve($eleve)
                        ->setSalle($salle)
                        ->setAnnee($annee)
                        ->setDatePaiement(new \DateTime('now'));

                    $em->persist($pansion);
                    $em->flush($pansion);
                }

                if($pansion->getReste() > 0){
                    $tranche = new Tranche();
                    $tranche->setCode($trancheRepository->genCode($eleve))
                        ->setMontant($montant)
                        ->setPansion($pansion)
                        ->setDatePaiement(new \DateTime('now'));


                    $em = $this->getDoctrine()->getManager();
                    $em->persist($tranche);
                    $em->flush($tranche);
                    $pansion->addTranch($tranche);
                }

                // $tranches = $pansion->getTranches();

                $options = new Options();
                $options->set('isRemoteEnabled', TRUE);
                
                $dompdf = new Dompdf($options);

                $context = stream_context_create([ 
                    'ssl' => [
                        'verify_peer' => FALSE, 
                        'verify_peer_name' => FALSE,
                        'allow_self_signed'=> TRUE
                    ]
                ]);

                $dompdf->setHttpContext($context);
                // var_dump(end($tranches)); die;

                $html = $this->renderView('print_recu.pay_tranche.html.twig', [
                    'eleve' => $eleve,
                    'salle' => $salle,
                    'classe' => $classe,
                    'pansion' => ["montant"=>$pansion->getMontant(), "reste"=>$pansion->getReste()],
                    'tranche_count' => $tranches?count($tranches)+1:1,
                    'tranche' => $tranche,
                    'annee' => $annee,
                ]);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A5', 'landscape');

                try{
                    $dompdf->render();
                    return new Response($dompdf->stream($tranche->getCode().".pdf", ["Attachment" => false]), 200, array('Content-Type' => 'application/pdf'));
                }catch(Exception $ex){
                    die($ex);
                }
            }

            // var_dump($pansion->getReste()); die;
            $template = (!$pansion || $pansion->getReste() > 0)?'pay_tranche.html.twig':'pay_tranche_ok.html.twig';
            return $this->render($template, [
                'eleve' => $eleve,
                'salle' => $salle,
                'classe' => $classe,
                'pansion' => $pansion?["montant"=>$pansion->getMontant(), "reste"=>$pansion->getReste()]:false,
                'tranches' => $tranches?count($tranches)+1:1
            ]);
        }else{
            return null;
        }
    }
}
