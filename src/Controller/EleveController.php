<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Inscription;
use App\Form\EleveType;
use App\Repository\EleveRepository;
use App\Repository\AnneeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/eleve")
 */
class EleveController extends AbstractController
{
    /**
     * @Route("/", name="eleve_index", methods={"GET"})
     */
    public function index(EleveRepository $eleveRepository): Response
    {
        //var_dump($eleveRepository->genMat("anglophone", (new \Datetime("now"))->getTimestamp())); die;
        return $this->render('eleve/index.html.twig', [
            'eleves' => $eleveRepository->findAll(),
        ]);
    }

    /**
     * @Route("/inscrire/{id}", name="inscrire", methods={"GET","POST"})
     */
    public function inscrire(Request $request, $id): Response
    {
        
        return $this->render('inscription.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * @Route("/inscription", name="inscription", methods={"GET","POST"})
     */
    public function inscription(Request $request, EleveRepository $eleveRepository): Response
    {
        if($request->getMethod() == 'GET')
        {
              $em = $this->getDoctrine()->getManager();

          $montant = $request->get("montant");
          $id = $request->get("id");
          if($eleve = $eleveRepository->findOneById($id)){
            $salle = $eleve->getSalle();

            $inscription = new Inscription();
            $inscription->setMontant($montant);
            $inscription->setEleve($eleve);
            $inscription->setSalle($salle);
            $em->persist($inscription);
            $em->flush($inscription);

            $eleve->setEtatInscription(true);
            $em->persist($eleve);
            $em->flush($eleve);

            return $this->redirectToRoute('eleve_index');
          }else{

          }

        }

    }

    /**
     * @Route("/new", name="eleve_new", methods={"GET","POST"})
     */
    public function new(Request $request,
    EleveRepository $eleveRepository,
        AnneeRepository $anneeRepository): Response
    {
        $eleve = new Eleve();
        $form = $this->createForm(EleveType::class, $eleve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($eleve);
            $entityManager->flush();

            $section = $eleve->getSalle()->getClasse()->getSection();
            $annee = "";
            $annee = $anneeRepository->lastAnnee()->getTimeStamp();
            $matricule = $eleveRepository->genMat($section, $annee);

            $em = $this->getDoctrine()->getManager();
            $eleve->setMatricule($matricule);
            $em->persist($eleve);
            $em->flush();

            return $this->redirectToRoute('eleve_index');
        }

        return $this->render('eleve/new.html.twig', [
            'eleve' => $eleve,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="eleve_show", methods={"GET"})
     */
    public function show(Eleve $eleve): Response
    {
        return $this->render('eleve/show.html.twig', [
            'eleve' => $eleve,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="eleve_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Eleve $eleve): Response
    {
        $form = $this->createForm(EleveType::class, $eleve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eleve_index', [
                'id' => $eleve->getId(),
            ]);
        }

        return $this->render('eleve/edit.html.twig', [
            'eleve' => $eleve,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="eleve_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Eleve $eleve): Response
    {
        if ($this->isCsrfTokenValid('delete'.$eleve->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($eleve);
            $entityManager->flush();
        }

        return $this->redirectToRoute('eleve_index');
    }
}
