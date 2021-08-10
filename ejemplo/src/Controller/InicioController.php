<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;

class InicioController extends AbstractController
{
   #[Route('/inicio', name: 'inicio')]
    public function index(): Response
    {  

    	$connection=$this->connectionbd();
        $query = "SELECT * FROM anuncios";
        $prepararconsulta=$connection->prepare($query);
        $prepararconsulta->execute();
        $resultado=$prepararconsulta->fetchall();


        $fecha=date('Y');
        return $this->render('inicio/index.html.twig', [
            'fechavista' => $fecha,
            'resultado'=>$resultado
        ]);
     }

    public function connectionbd() 
    {
     $conn=$this->getDoctrine()->getConnection();
     return $conn;
    }

}