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
                <head>
                    <title>Обмен - Exchange</title>
                </head>
                <body>
                    САЙТ В РАЗРАБОТКЕ !!! <br> <br>
                    <form action="/login" target="_self" method='get'>
                        <input type='submit' value='Вход'>
                    </form>    
                    <form action="/registration" target="_self" method='get'>
                    <input type='submit' value='Регистрация'>
                    </form>
                </body>
            </html>
            EOF
        );
    }
}
