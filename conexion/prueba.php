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

            $conexion= new Conexion();

            $conexion= 'INSERT INTO partida (Codigo , Denominacion) VALUES (?,?)';
            $registro=$this->pdo->prepare($conexion);
            return $registro->execute(array($codigo, $denominacion));
            var_dump($registro); 

            echo "registro realizado";           
          
}
        else  {
            echo "No se recibieron los datos";
        }    
  }


     
       
