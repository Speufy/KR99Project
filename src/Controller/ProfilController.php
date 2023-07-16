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
        $totalArmy = $this->getTotalArmy($army);
        return $this->render('profil/profil.html.twig', [
            'controller_name' => 'ProfilController',
            'army'=>$army,
            'total'=> $totalArmy,
        ]);
    }

    public function getTotalArmy($army){

        $t1Inf = $army[0]->getT1Infantry();
        $t2Inf = $army[0]->getT2Infantry();
        $t3Inf = $army[0]->getT3Infantry();
        $t4Inf = $army[0]->getT4Infantry();
        $t5Inf = $army[0]->getT5Infantry();
        $totalInf = $t1Inf + $t2Inf + $t3Inf + $t4Inf + $t5Inf;

        $t1Cav = $army[0]->getT1Cavalry();
        $t2Cav = $army[0]->getT2Cavalry();
        $t3Cav = $army[0]->getT3Cavalry();
        $t4Cav = $army[0]->getT4Cavalry();
        $t5Cav = $army[0]->getT5Cavalry();
        $totalCav = $t1Cav + $t2Cav + $t3Cav + $t4Cav + $t5Cav;

        $t1Mage = $army[0]->getT1Mage();
        $t2Mage = $army[0]->getT2Mage();
        $t3Mage = $army[0]->getT3Mage();
        $t4Mage = $army[0]->getT4Mage();
        $t5Mage = $army[0]->getT5Mage();
        $totalMage = $t1Mage + $t2Mage + $t3Mage + $t4Mage + $t5Mage;


        $t1Fly = $army[0]->getT1Fly();
        $t2Fly = $army[0]->getT2Fly();
        $t3Fly = $army[0]->getT3Fly();
        $t4Fly = $army[0]->getT4Fly();
        $t5Fly = $army[0]->getT5Fly();
        $totalFly = $t1Fly + $t2Fly + $t3Fly + $t4Fly + $t5Fly;


        $t1Marksmen = $army[0]->getT1Marksmen();
        $t2Marksmen = $army[0]->getT2Marksmen();
        $t3Marksmen = $army[0]->getT3Marksmen();
        $t4Marksmen = $army[0]->getT4Marksmen();
        $t5Marksmen = $army[0]->getT5Marksmen();
        $totalMarksmen = $t1Marksmen + $t2Marksmen + $t3Marksmen + $t4Marksmen + $t5Marksmen;

        $totalTroops = ['infantry'=>$totalInf,'cavalry'=>$totalCav,'mage'=>$totalMage,'fly'=>$totalFly,'marksmen'=>$totalMarksmen];
        return $totalTroops;
    }



}
