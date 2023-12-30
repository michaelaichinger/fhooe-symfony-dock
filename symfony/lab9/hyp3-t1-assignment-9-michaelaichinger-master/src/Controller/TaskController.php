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

#[Route('/task')]
class TaskController extends AbstractController
{
    #[Route('/new', name: 'task_new')]
    public function newTask(Request $request, LoggerInterface $logger): Response
    {

        $task = new Task();

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class)
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $task = $form->getData();

                $logger->debug(print_r($task, true));

                return new Response(
                    print_r($task, true),
                    200,
                    ['Content-Type'=>'text/plain']
                );

            }

        return $this->render('task/new.html.twig', [
            'form' => $form
        ]);
    }
}
