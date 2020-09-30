<?php 

include_once 'conexion.php';

class Prueba extends Conexion {
 
    function __construct()
    {
      parent::__construct();
    }
}


 function registrar ($codigo ,$denominacion)
  {
         
    if (isset($_POST)) {
            $codigo=$_POST['codigo'];
            $denominacion=$_POST['denominacion'];

            $registrar= 'INSERT INTO partida (Codigo , Denominacion) VALUES (?,?)';
            $registro=$this->pdo->prepare($registrar);
            return $registro->execute(array($codigo, $denominacion));
            var_dump($registro);            
          
}
        else  {
            echo "No se recibieron los datos";
        }    
  }


     
       
