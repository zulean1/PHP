<?php 

include_once 'conexion.php';

class Prueba extends Conexion {
 
    function __construct()
    {
      parent::__construct();
    }


  public function registro ( $codigo , $denominacion){

      
    $agregar= ' INSERT INTO partida (Codigo,Denominacion) VALUES (?,?)';
    $v_agregar=$this->pdo->prepare($agregar);
   return $v_agregar->execute(array( $codigo, $denominacion));



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


     
       
