<?php

namespace App\Controller;

use App\Entity\Army;
use App\Repository\ArmyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $armyRepo = $entityManager->getRepository(Army::class);
        $t5Players = $armyRepo->countT5Players();
        $detailedArmy =$this->getArmyAlly($doctrine);
//        dd($detailedArmy);
        return $this->render('dashboard/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
            'detailedArmy'=>$detailedArmy,
            'T5Players'=>$t5Players,
        ]);
    }

    public function getArmyAlly(ManagerRegistry $doctrine){
        $entityManager = $doctrine->getManager();
        $armyRepo = $entityManager->getRepository(Army::class);
        $armies = $armyRepo->findAll();

        $total_t1Fly = 0;
        $total_t2Fly = 0;
        $total_t3Fly = 0;
        $total_t4Fly = 0;
        $total_t5Fly = 0;

        $total_t1Inf = 0;
        $total_t2Inf = 0;
        $total_t3Inf = 0;
        $total_t4Inf = 0;
        $total_t5Inf = 0;

        $total_t1Mage = 0;
        $total_t2Mage = 0;
        $total_t3Mage = 0;
        $total_t4Mage = 0;
        $total_t5Mage = 0;

        $total_t1Cav = 0;
        $total_t2Cav = 0;
        $total_t3Cav = 0;
        $total_t4Cav = 0;
        $total_t5Cav = 0;

        $total_t1Mm = 0;
        $total_t2Mm = 0;
        $total_t3Mm = 0;
        $total_t4Mm = 0;
        $total_t5Mm = 0;
        $detailArmy = [];
        foreach ($armies as $army){
            $detailArmy = [
                'T1Fly'=>$total_t1Fly +=$army->getT1Fly(),
                'T2Fly'=>$total_t2Fly +=$army->getT2Fly(),
                'T3Fly'=>$total_t3Fly +=$army->getT3Fly(),
                'T4Fly'=>$total_t4Fly +=$army->getT4Fly(),
                'T5Fly'=>$total_t5Fly +=$army->getT5Fly(),

                'T1Inf'=>$total_t1Inf +=$army->getT1Infantry(),
                'T2Inf'=>$total_t2Inf +=$army->getT2Infantry(),
                'T3Inf'=>$total_t3Inf +=$army->getT3Infantry(),
                'T4Inf'=>$total_t4Inf +=$army->getT4Infantry(),
                'T5Inf'=>$total_t5Inf +=$army->getT5Infantry(),

                'T1Mage'=>$total_t1Mage +=$army->getT1Mage(),
                'T2Mage'=>$total_t2Mage +=$army->getT2Mage(),
                'T3Mage'=>$total_t3Mage +=$army->getT3Mage(),
                'T4Mage'=>$total_t4Mage +=$army->getT4Mage(),
                'T5Mage'=>$total_t5Mage +=$army->getT5Mage(),

                'T1Cav'=>$total_t1Cav +=$army->getT1Cavalry(),
                'T2Cav'=>$total_t2Cav +=$army->getT2Cavalry(),
                'T3Cav'=>$total_t3Cav +=$army->getT3Cavalry(),
                'T4Cav'=>$total_t4Cav +=$army->getT4Cavalry(),
                'T5Cav'=>$total_t5Cav +=$army->getT5Cavalry(),

                'T1Mm'=>$total_t1Mm +=$army->getT1Marksmen(),
                'T2Mm'=>$total_t2Mm +=$army->getT2Marksmen(),
                'T3Mm'=>$total_t3Mm +=$army->getT3Marksmen(),
                'T4Mm'=>$total_t4Mm +=$army->getT4Marksmen(),
                'T5Mm'=>$total_t5Mm +=$army->getT5Marksmen(),

                'TotalT1'=>$total_t1Mm + $total_t1Cav + $total_t1Mage + $total_t1Fly + $total_t1Inf,
                'TotalT2'=>$total_t2Mm + $total_t2Cav + $total_t2Mage + $total_t2Fly + $total_t2Inf,
                'TotalT3'=>$total_t3Mm + $total_t3Cav + $total_t3Mage + $total_t3Fly + $total_t3Inf,
                'TotalT4'=>$total_t4Mm + $total_t4Cav + $total_t4Mage + $total_t4Fly + $total_t4Inf,
                'TotalT5'=>$total_t5Mm + $total_t5Cav + $total_t5Mage + $total_t5Fly + $total_t5Inf

            ];

        }
        return $detailArmy ;

    }
}


