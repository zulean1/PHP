<?php 
include_once 'prueba.php';



  $registro = new Prueba();
    
  

           $partida = $registro->listar();
  
           foreach ($partida as  $partidas) {
             $partida = $registro->listar();


             echo $partidas['Codigo'];
             echo $partidas['Denominacion'];


         }




            



 ?>



