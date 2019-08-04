<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Twig\Environment;

class DefaultController extends AbstractController
{
    
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function admin(): Response
    {
        return $this->render('template.html.twig'
        );
    }
    
    /**
     * @Route("/parametre", name="parametre", methods={"GET"})
     */
    public function parametre(): Response
    {
        return $this->render('parametre.html.twig'
        );
    }
    
}