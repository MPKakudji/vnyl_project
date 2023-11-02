<?php

namespace App\Controller;

use App\Repository\PricingPlanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    #[Route('/pricing', name: 'app_pricing')]
    public function index(PricingPlanRepository $pricingPlanRepository): Response
    {
        $plans = $pricingPlanRepository->findAll();
        return $this->render('pricing/index.html.twig', [
            'controller_name' => 'PricingController',
            'plans' => $plans
        ]);
    }
}
