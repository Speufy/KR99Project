<?php

namespace App\Controller;

use App\Entity\Army;
use App\Entity\PlayTimeSchedule;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(ManagerRegistry $doctrine, ChartBuilderInterface $chartBuilder): Response
    {
        $entityManager = $doctrine->getManager();
        $armyRepo = $entityManager->getRepository(Army::class);
        $t5Players = $armyRepo->countT5Players();
        $nbreJoueursParHeures = $this->getAllianceActivity($doctrine);
        $detailedArmy =$this->getArmyAlly($doctrine);
        return $this->render('dashboard/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
            'detailedArmy'=>$detailedArmy,
            'T5Players'=>$t5Players,
            'nbreJoueursParHeures'=>$nbreJoueursParHeures
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
    #[Route('/dashboard/chart', name: 'app_dashboardChart')]
    public function indexchart(ManagerRegistry $doctrine): Response
    {

        $nbreJoueursParHeures = $this->getAllianceActivity($doctrine);
        return $this->render('dashboard/dashboardChart.html.twig', [
            'controller_name' => 'DashboardChartController',
            'nbreJoueursParHeures'=>$nbreJoueursParHeures
        ]);
    }

    public function getAllianceActivity(ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $schedulRepo = $entityManager->getRepository(PlayTimeSchedule::class);
        $schedules = $schedulRepo->findAll();
        $nbreJoueursParHeures = array_fill(1, 24, 0);


        foreach ($schedules as $schedule) {
                $nbreJoueursParHeures[1] += (int)$schedule->isHour1();
                $nbreJoueursParHeures[2] += (int)$schedule->isHour2();
                $nbreJoueursParHeures[3] += (int)$schedule->isHour3();
                $nbreJoueursParHeures[4] += (int)$schedule->isHour4();
                $nbreJoueursParHeures[5] += (int)$schedule->isHour5();
                $nbreJoueursParHeures[6] += (int)$schedule->isHour6();
                $nbreJoueursParHeures[7] += (int)$schedule->isHour7();
                $nbreJoueursParHeures[8] += (int)$schedule->isHour8();
                $nbreJoueursParHeures[9] += (int)$schedule->isHour9();
                $nbreJoueursParHeures[10] += (int)$schedule->isHour10();
                $nbreJoueursParHeures[11] += (int)$schedule->isHour11();
                $nbreJoueursParHeures[12] += (int)$schedule->isHour12();
                $nbreJoueursParHeures[13] += (int)$schedule->isHour13();
                $nbreJoueursParHeures[14] += (int)$schedule->isHour14();
                $nbreJoueursParHeures[15] += (int)$schedule->isHour15();
                $nbreJoueursParHeures[16] += (int)$schedule->isHour16();
                $nbreJoueursParHeures[17] += (int)$schedule->isHour17();
                $nbreJoueursParHeures[18] += (int)$schedule->isHour18();
                $nbreJoueursParHeures[19] += (int)$schedule->isHour19();
                $nbreJoueursParHeures[20] += (int)$schedule->isHour20();
                $nbreJoueursParHeures[21] += (int)$schedule->isHour21();
                $nbreJoueursParHeures[22] += (int)$schedule->isHour22();
                $nbreJoueursParHeures[23] += (int)$schedule->isHour23();
                $nbreJoueursParHeures[24] += (int)$schedule->isHour24();
        }
            return $nbreJoueursParHeures;
    }
}


