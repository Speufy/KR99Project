<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AddAnnonceFormType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnouncementController extends AbstractController
{
    #[Route('/announcement', name: 'app_announcement')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $annonceRepo = $entityManager->getRepository(Annonce::class);
        $annonces = $annonceRepo->findAll();


        return $this->render('announcement/announcement.html.twig', [
            'controller_name' => 'AnnouncementController',
            'annonces'=>$annonces,
        ]);
    }
    #[Route('/announcement/add', name: 'app_announcement_add')]
    public function addAnnonce(ManagerRegistry $doctrine,Request $request): Response
    {
        $annonce = new Annonce();
        $annonce->setCreateDate(new \DateTime());
        $form = $this->createForm(AddAnnonceFormType::class, $annonce);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();
            return $this->redirectToRoute('app_announcement');

        } else {
            return $this->render('announcement/addAnnonce.html.twig', [
                'controller_name' => 'AnnouncementController',
                'form'=> $form->createView()
            ]);
        }
    }

    #[Route('/announcement/delete/{id}', name: 'app_announcement_delete')]
    public function deleteAnnonce(Annonce $annonce, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($annonce);
        $entityManager->flush();
        return $this->redirectToRoute('app_announcement'); // Redirigez vers la page d'accueil ou toute autre page appropriée.
    }




}
