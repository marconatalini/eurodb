<?php

namespace App\Controller;

use App\Entity\TbAvanzamento;
use App\Form\StepType;
use App\Repository\TbAvanzamentoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avanzamento")
 */
class AvanzamentoController extends AbstractController
{
    /**
     * @Route("/", name="avanzamento")
     */
    public function index()
    {
        return $this->render('avanzamento/index.html.twig', [
            'controller_name' => 'AvanzamentoController',
        ]);
    }

    /**
     * @Route("/delete/{idAvanzamento}", name="avanzamento_delete")
     */
    public function delete(TbAvanzamento $avanzamento, Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($avanzamento);
        $entityManager->flush();

        return $this->redirectToRoute('eurostep_live');
    }

        /**
     * @Route("/edit/{idAvanzamento}", name="avanzamento_edit")
     */
    public function edit(TbAvanzamento $avanzamento, Request $request)
    {
        $form = $this->createForm(StepType::class, $avanzamento);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $avanzamento = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avanzamento);
            $entityManager->flush();

            return $this->redirectToRoute('eurostep_live');
        }

        return $this->render('avanzamento/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
