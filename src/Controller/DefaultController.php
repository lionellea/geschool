<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Tranche;
use App\Entity\Inscription;
use App\Repository\EleveRepository;
use App\Repository\TrancheRepository;
use App\Repository\InscriptionRepository;
use App\Repository\SalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="accueil", methods={"GET"})
     */
    public function index(
        EleveRepository $eleveRepository,
        TrancheRepository $trancheRepository,
        InscriptionRepository $inscriptionRepository
    ): Response
    {
        return $this->render('accueil.html.twig');
    }

    /**
     * @Route("/parametre", name="parametre", methods={"GET"})
     */
    public function parametre(): Response
    {
        return $this->render('annee/new.html.twig');
    }
   
    /**
     * @Route("/eleve/salle/{id}", name="eleve_salle", methods={"GET","POST"})
     */
    public function liste(
        Request $request,
        $id,
        EleveRepository $eleveRepository
    ){
        
        $eleves = $eleveRepository->eleve_salle($id);
        //var_dump($libelle); die;
        return $this->render('eleve_salle.html.twig', [
            'eleves' => $eleves,
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
     * @Route("/inscription", name="inscription", methods={"GET","POST"})
     */
    public function inscription(Request $request,
     EleveRepository $eleveRepository,
     $id,
    SalleRepository $salleRepository): Response
    {
        echo "hello";
        if($request->getMethod() == 'GET')
        {
              $em = $this->getDoctrine()->getManager();

          $montant = intVal($request->get("montant"));
          $id = $request->get("id");
          //var_dump($id); die();
          if($eleve = $eleveRepository->findOneById($id)){
            $salle = $eleve->getSalle();

            $inscription = new Inscription();
            $inscription->setMontant($montant);
            $inscription->setEleve($eleve);
            $inscription->setSalle($salle);
            $em->persist($inscription);
            $em->flush($inscription);

            $em1 = $this->getDoctrine()->getManager();
            $eleve->setEtatInscription(true);
            $em1->persist($eleve);
            $em1->flush($eleve);

        //var_dump($libelle); die;
        return $this->redirectToRoute('eleve_salle');
          }else{
       echo "no";
          }

        }

    }
   
}
