<?php

namespace App\Controller;

use App\Entity\Archive\AboUser;
use App\Entity\Archive\article;
use App\Repository\Archive\Abo_UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'article' => $doctrine->getRepository(article::class, 'archive')->find(8616),
        ]);
    }
}
