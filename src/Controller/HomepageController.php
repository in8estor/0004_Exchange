<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): JsonResponse
    {
        return new JsonResponse(
            <<<EOF
            <html>
                <body>
                    <img src="/images/homepage.gif" />
                </body>
            </html>
            EOF
        );
    }
}
