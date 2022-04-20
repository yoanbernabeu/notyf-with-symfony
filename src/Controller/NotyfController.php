<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotyfController extends AbstractController
{
    #[Route('/{notyf}', name: 'app_notyf')]
    public function index(?string $notyf = null): Response
    {
        if (null != $notyf) {
            $this->addFlash($notyf, 'This is a '.$notyf.' flash message.');
        }

        return $this->render('notyf/index.html.twig', [
            'notyf' => $notyf,
        ]);
    }
}
