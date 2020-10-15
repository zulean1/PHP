<?php 
include_once 'prueba.php';



  $registro = new Prueba();
    
    if (isset($_POST) ) {
            $codigo=$_POST['codigo'];
            $denominacion=$_POST['denominacion'];

         
             $registro->registro($codigo,$denominacion);
             var_dump( $registro );

           


            echo "registro realizado";      

           
          
}
        else  {
            echo "No se recibieron los datos";
        }   


           $partida = $registro->listar();
  
           foreach ($partida as  $partidas) {
             $partida = $registro->listar();


             echo $partidas['Codigo'];
             echo $partidas['Denominacion'];


         }




            



 ?>



