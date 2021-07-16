<?php

namespace App\Controller;

use App\Form\ContactType;

use App\Repository\AproposRepository;
use App\Repository\CompetencesRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AproposRepository $AproposRepository, CompetencesRepository $CompetencesRepository, Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        $technologies = $CompetencesRepository->findBy(array('techno' => "technologie"));
        $frameworks = $CompetencesRepository->findBy(array('techno' => "framework"));
        $cms = $CompetencesRepository->findBy(array('techno' => "cms"));

        if($form->isSubmitted() && $form->isValid()){
            echo "hello world";
            die();
        }



        $Apropos = $AproposRepository->findOneBy(array('id'=>1));
        return $this->render('home/index.html.twig', [
            'apropos' => $Apropos,
            'technologies' => $technologies,
            'frameworks' => $frameworks,
            'cms' => $cms,
            'contactForm' => $form->createView()
        ]);






    }
}
