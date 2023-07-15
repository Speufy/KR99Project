<?php

namespace App\Controller;

use App\Entity\Army;
use App\Entity\User;
use App\Form\EditArmyFormType;
use App\Form\EditUserFormType;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArmyRepository;

class ProfilController extends AbstractController
{
    #[Route('/profil/editArtefact', name: 'app_profil_editartefact')]
    public function editArtefact(): Response
    {
        return $this->render('profil/profilEditArtefact.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
    #[Route('/profil/editHeroes', name: 'app_profil_editheroe')]
    public function editHeroes(): Response
    {
        return $this->render('profil/profilEditHeroe.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
    #[Route('/profil/editArmy', name: 'app_profil_editarmy')]
    public function editArmy(ManagerRegistry $doctrine, Request $request): Response
    {

        $user = $this->getUser();
        $army  = $user->getArmy();
        $form = $this->createForm(EditArmyFormType::class,$army);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $entityManager = $doctrine->getManager();
            $entityManager->persist($army);
            $entityManager->flush();
            return $this->redirectToRoute('app_profil');

        }else {
            return $this->render('profil/profilEditArmy.html.twig', [
                'controller_name' => 'ProfilController',
                'form'=> $form->createView()
            ]);
        }
    }
    #[Route('/profil/editUser', name: 'app_profil_edituser')]
    public function editUser(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditUserFormType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $entityManager = $doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_profil');

        }else{
            return $this->render('profil/profilEditUser.html.twig', [
                'controller_name' => 'ProfilController',
                'form'=> $form->createView()
            ]);
        }


    }
    #[Route('/profil', name: 'app_profil')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $army = $user->getArmy();
        $armyId = $army->getId();
        $entityManager = $doctrine->getManager();
        $armyRepo = $entityManager->getRepository(Army::class);
        $army = $armyRepo->findBy(
            ['id'=>$armyId]
        );
        return $this->render('profil/profil.html.twig', [
            'controller_name' => 'ProfilController',
            'army'=>$army
        ]);
    }



}
