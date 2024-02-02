<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/compte')]
class DownloadController extends AbstractController
{
    #[Route('/download/{magId}', name: 'dl_file')]
    public function download($magId, AuthenticationUtils $authenticationUtils): Response
    {
        // Vérifiez si l'utilisateur est connecté
        if (!$this->getUser()) {
            $this->addFlash('error', 'Vous devez vous connecter pour accèder aux archives');
            $error = $authenticationUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();
            return $this->render('login/index.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error,
            ]);
        }

        // Construisez le chemin complet vers le fichier
        $filePath = $this->getParameter('kernel.project_dir') . '/download/pdf/fluvial' . $magId . '.pdf';

        // Vérifiez si le fichier existe
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException("Le fichier n'existe pas.");
        }

        // Lisez le contenu du fichier
        $fileContent = file_get_contents($filePath);

        // Créez une réponse Symfony avec le contenu du fichier
        $response = new Response($fileContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="' . $magId . '"');

        return $response;
    }
}
