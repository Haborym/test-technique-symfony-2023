<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class HomeController extends AbstractController
{
    private $user;

    #[Route('/', name: 'app_home')]
    public function homePage(): Response
    {
        return $this->render('home/index.html.twig', [

        ]);
    }

    #[Route('/secure-page', name: 'app_secure')]
    public function securedPage(): Response
    {
        return $this->render('home/securedPage.html.twig', [
            
        ]);
    }
}
