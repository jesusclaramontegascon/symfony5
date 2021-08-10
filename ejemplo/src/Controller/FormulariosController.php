<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulariosController extends AbstractController
{
    #[Route('/formularios', name: 'formularios')]
    public function index(): Response
    {   $fecha=date('Y');
        return $this->render('formularios/index.html.twig', [
            'fechavista' => $fecha,
        ]);
    }

    public function envio(): Response
    {   
    	$fecha=date('Y');
        $valor1=$_POST["textocomentario"];
        $valor2=$_POST["titulocomentario"];

       //$ObjetoComentariosRepository=new ComentariosRepository();
       //$Valordevuelto=$ObjetoComentariosRepository->findallinsercionsql();
       //print_r($Valordevuelto);echo "<br>";

        return $this->render('formularios/envio.html.twig', [
            'fechavista' => $fecha,
            'valor1' => $valor1,
            'valor2' => $valor2,
        ]);
    }
}