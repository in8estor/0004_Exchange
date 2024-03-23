<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_registration', methods: 'post')]
    public function create(Request $request, UserRepository $userRepository): JsonResponse
    {
        $emailData = json_decode($request->getEmail(), true);
        $email = (new User())->setEmail($emailData['email']);
        $userRepository->save($email, true);
        
        return $this->json($email);
    }
}
