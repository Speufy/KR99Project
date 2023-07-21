<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function index(): Response
    {
        return $this->render('event/event.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route ('/event/add', name:'app_event_add'),
    IsGranted("ROLE_ADMIN")]
    public function addEvent(ManagerRegistry $doctrine, Request $request):Response{
        $event = new Event();
        $form = $this->createForm(EventFormType::class,$event);
        $form->handleRequest($request);
        if(  $form->isSubmitted()){
            $manager = $doctrine->getManager();
            $manager->persist($event);
            $form->getData();

            $manager->flush();

        }

        return $this->render('event/add_event.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
