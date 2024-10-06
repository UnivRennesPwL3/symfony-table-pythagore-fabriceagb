<?php

namespace App\Controller;

use App\utils\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagoreUtility;
    public function __construct(PythagoreUtility $pythagoreUtility){
        $this->pythagoreUtility = $pythagoreUtility;
    }



    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        return $this->render('pythagore/index.html.twig', [
            'controller_name' => 'PythagoreController',
        ]);
    }

    #[Route('/pythagore/view', name: 'app_pythagore')]
    public function displayPythagoreAction(){
        return  $this->render("displayPythagore.html.twig",
    [
        'htmlResponse' => $this->pythagoreUtility->display()
    ]);
    }
}
