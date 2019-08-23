<?php

namespace App\Controller;

use App\Entity\Acheter;
use App\Form\AcheterType;
use App\Repository\AcheterRepository;
use App\Repository\EleveRepository;
use App\Repository\AnneeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Options;
use Dompdf\Dompdf;

/**
 * @Route("/acheter")
 */
class AcheterController extends AbstractController
{
    /**
     * @Route("/", name="acheter_index", methods={"GET"})
     */
    public function index(AcheterRepository $acheterRepository): Response
    {
        return $this->render('acheter/index.html.twig', [
            'acheters' => $acheterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{id}", name="acheter_new", methods={"GET","POST"})
     */
    public function new(Request $request,
                         $id,
                         EleveRepository $eleveRepository,
                         AnneeRepository $anneeRepository): Response
    {
        $annee = $anneeRepository->AnneeEnCours();
        $eleve = $eleveRepository->findOneById($id);
        $acheter = new Acheter();
        $form = $this->createForm(AcheterType::class, $acheter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $acheter->setEleve($eleve);
            $acheter->setAnnee($annee);
            $entityManager->persist($acheter);
            $entityManager->flush();
            $this->addFlash('success', 'Achat effecuté avec succès');
            $acheter->setCode($acheterRepository->genCode());

            try{
                $entityManager->persist($acheter);
                $entityManager->flush();
            }catch(Exception $ex){
                $this->addFlash('error', 'Une erreur est survenue lors de l\'achat.');
                return null;
            }
            $this->addFlash('success', 'Achat effecuté avec succès.');

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

            $annee = $anneeRepository->AnneeEnCours();
            $html = $this->renderView('acheter/print_recu.html.twig', [
                'eleve' => $eleve,
                'acheter' => $acheter,
                'annee' => $annee,
            ]);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A5', 'landscape');

            try{
                $dompdf->render();
                return new Response($dompdf->stream($acheter->getCode().".pdf", ["Attachment" => false]), 200, array('Content-Type' => 'application/pdf'));
            }catch(Exception $ex){
                $this->addFlash('error', 'Une erreur est survenue lors de la generation du recu.');
                return $this->redirectToRoute('acheter_new', ['id'=>$id]);
                // die($ex);
            }
        }

        return $this->render('acheter/new.html.twig', [
            'acheter' => $acheter,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="acheter_show", methods={"GET"})
     */
    public function show(Acheter $acheter): Response
    {
        return $this->render('acheter/show.html.twig', [
            'acheter' => $acheter,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="acheter_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Acheter $acheter): Response
    {
        $form = $this->createForm(AcheterType::class, $acheter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('acheter_index');
        }

        return $this->render('acheter/edit.html.twig', [
            'acheter' => $acheter,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="acheter_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Acheter $acheter): Response
    {
        if ($this->isCsrfTokenValid('delete'.$acheter->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($acheter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('acheter_index');
    }
}
