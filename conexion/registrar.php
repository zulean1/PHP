<?php 
include_once 'prueba.php';



  $prueba = new Prueba();
    
    if (isset($_POST) ) {
            $codigo=$_POST['codigo'];
            $denominacion=$_POST['denominacion'];

         
             $prueba->registrar($codigo,$denominacion);

           


            echo "registro realizado";      

           
          
}
        else  {
            echo "No se recibieron los datos";
        }   


           $partida = $prueba->listar();
  
           foreach ($partida as  $partidas) {
             $partida = $prueba->listar();


             echo $partidas['Codigo'];
             echo $partidas['Denominacion'];


         }




            



 ?>



