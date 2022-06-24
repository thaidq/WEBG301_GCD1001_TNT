<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/", name="app_products_index", methods={"GET"})
     * @param UserRepository $productsRepository
     * @param $UserRepository
     * @return Response
     */
    public function index(UserRepository $productsRepository, $UserRepository): Response
    {
        $userRepository = $this;
        return $this->render('user/index.html.twig', [
            'user' => $UserRepository->findAll(),
        ]);
    }
}
