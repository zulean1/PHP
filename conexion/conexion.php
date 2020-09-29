<?php 

  

  	
  	 $usuario ="admin";
     $contrasena ="root";
     $pdo =null;
   

  	
  	
  		try {
        
          	$pdo = new PDO('mysql:host=localhost;dbname=partida', $usuario,$contrasena);

            echo "Conexion realizada";
  
 
         } catch (PDOException $e) {
          echo 'Falló la conexión: ' . $e->getMessage();
}

  
 
  






 ?>