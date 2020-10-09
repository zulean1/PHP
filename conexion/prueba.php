<?php 

include_once 'conexion.php';

class Prueba extends Conexion {
 
    function __construct()
    {
      parent::__construct();
    }



 function registrar ($codigo ,$denominacion)
  {
     try {
           
            $conexion= 'INSERT INTO partida (Codigo,Denominacion) VALUES (?,?)';
            $registro=$this->pdo->prepare($conexion);
          return $registro->execute(array($codigo, $denominacion));
      
            
        }

              catch(PDOException $e) {
            echo $e->getMessage();
         }

  }

  
     public function listar(){
          try {
          
          $leerp=$this->pdo->prepare('SELECT * FROM partida');
          $leerp->execute();
          $partida=$leerp->fetchAll();
          return $partida;

             }

         catch(PDOException $e) {
            echo $e->getMessage();
         }
    }

  }


     
       
