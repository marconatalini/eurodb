<?php

namespace App\Controller;

use App\Repository\TbDescrizioniFasiProduzioneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


    public function reparti(TbDescrizioniFasiProduzioneRepository $repository)
    {
        $reparti = $repository->findAll();

        return $this->render('default/_reparti.html.twig', [
            'reparti' => $reparti,
        ]);
    }
}
