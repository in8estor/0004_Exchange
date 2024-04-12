<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_registration', methods: 'post')]
    public function create(Request $request, UserRepository $userRepository): JsonResponse
    {
        $jsonData = json_decode($request->getContent(), true);
        $user = new User();
        $user->setPhone($jsonData['phone']);
        $user->setEmail($jsonData['email']);
        $user->setName($jsonData['name']);
        $user->setPassword($jsonData['password']);
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());
        $userRepository->save($user);

        return $this->json($user);
    }
}
