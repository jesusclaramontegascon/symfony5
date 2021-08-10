<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Anuncios;


class AnunciosController extends AbstractController
{
    #[Route('/anuncios', name: 'anuncios')]
    public function index(): Response
    {
       
       $fecha=date('Y');
        return $this->render('anuncios/index.html.twig', [
            'fechavista' => $fecha,
        ]);
    }


    public function valorpasado($valor1): Response
    {
    
   
    	/*cargamos el repositorio*/
    	$Anuncios=$this->getDoctrine()->getRepository(Anuncios::Class);

        /*sacamos un valor*/
    	echo "cargamos auncios repositorio";echo "<br>";
    	$An=$Anuncios->find(2);
       
        echo "cargamos el objeto de un valor";echo "<br>";
    	print_r($An);echo "<br>";


    	echo "cargamos el getter de descripcion anuncio";echo "<br>";
    	//print_r($An->getDescripcionanuncio());echo "<br>";

    	$An2=$Anuncios->findAll();

    	echo "**************************<br>";

    	//$An2->getIdanuncio();echo "<br>";

    	echo "*******************************<br>";

        echo "------------------------------------------------<br>";
        echo "cargamos el objeto de todos los valores";echo "<br>";
    	print_R($An2);echo "<br>";
    	echo "------------------------------------------------<br>";

    	echo "******cargamos solo lo de un campo an2 descripcion anuncio2***";echo "<br/>";
    

        $fecha=date('Y');
        return $this->render('anuncios/ver.html.twig', [
            'fechavista' => $fecha,
            'anuncios2'=>$An2
        ]);

    } 

    public function valorpasado2($valor2,$valor2b): Response
    {   
      

      $longitudvalor2=strlen($valor2); $longitudvalor2b=strlen($valor2b);
      
      //echo $longitudvalor2;echo "<br>";
      //echo $longitudvalor2b;echo "<br>";
    	
    	$fecha=date('Y');
        return $this->render('anuncios/ver2.html.twig', [
            'fechavista' => $fecha,
            'valor2' => $valor2,
            'valor2b' => $valor2b

        ]);
        
    }

    public function valorpasado3($valor3,$valor3b): Response
    {   
      $fecha=date('Y');
        return $this->render('anuncios/ver3.html.twig', [
            'fechavista' => $fecha,
            'valor3'=> $valor3,
            'valor3b'=> $valor3b,
        ]);
    }
    
}
