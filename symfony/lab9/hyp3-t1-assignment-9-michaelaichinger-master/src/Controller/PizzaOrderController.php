<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Task;

use Psr\Log\LoggerInterface;

#[Route('/pizzaOrder')]
class PizzaOrderController extends AbstractController
{
    #[Route('/new', name: 'pizzaOrder_new')]
    public function newPizzaOrder(Request $request, LoggerInterface $logger): Response

    //todo:
    {
        return $this->render('pizza_order/index.html.twig', [
            'controller_name' => 'PizzaOrderController',
        ]);
    }
}
