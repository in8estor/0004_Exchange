<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return new Response(
            <<<EOF
            <html>
                <body>
                    <img src="/images/homepage.gif" />
                    <form action="/login" target="_blank">
                        <button>Войти</button>
                    </form>    
                    <form action="/registration" target="_blank">
                        <button>Регистрация</button>
                    </form>
                </body>
            </html>
            EOF
        );
    }
}
