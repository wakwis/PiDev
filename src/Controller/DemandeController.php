<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeController extends AbstractController
{
    /**
     * @Route("/demande", name="demande")
     */
    public function CreateDemande(): Response
    {
        return $this->render('demande/CreateDemande.html.twig', [
            'controller_name' => 'DemandeController',
        ]);
    }

}
