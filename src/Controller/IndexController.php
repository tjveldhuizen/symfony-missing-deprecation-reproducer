<?php

namespace App\Controller;

use App\Form\TestForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    function index()
    {
        $form = $this->createForm(TestForm::class);

        return $this->render('index.html.twig', ['form' => $form->createView()]);
    }
}