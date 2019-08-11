<?php

namespace App\Controller;

use App\Entity\Annee;
use App\Form\AnneeType;
use App\Repository\AnneeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/accueil/annee")
 */
class AnneeController extends AbstractController
{
    /**
     * @Route("/", name="annee_index", methods={"GET"})
     */
    public function index(AnneeRepository $anneeRepository): Response
    {
        return $this->render('annee/index.html.twig', [
            'annees' => $anneeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="annee_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $annee = new Annee();
        $form = $this->createForm(AnneeType::class, $annee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annee);
            $entityManager->flush();

            return $this->redirectToRoute('annee_index');
        }

        return $this->render('annee/new.html.twig', [
            'annee' => $annee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="annee_show", methods={"GET"})
     */
    public function show(Annee $annee): Response
    {
        return $this->render('annee/show.html.twig', [
            'annee' => $annee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="annee_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Annee $annee): Response
    {
        $form = $this->createForm(AnneeType::class, $annee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annee_index', [
                'id' => $annee->getId(),
            ]);
        }

        return $this->render('annee/edit.html.twig', [
            'annee' => $annee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="annee_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Annee $annee): Response
    {
        if ($this->isCsrfTokenValid('delete'.$annee->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($annee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('annee_index');
    }
}
