<?php 

include 'conexion.php';

       
    if (isset($_POST)) {
            $codigo=$_POST['codigo'];
            $denominacion=$_POST['denominacion'];

            $registrar= 'INSERT INTO partida (Codigo , Denominacion) VALUES (?,?)';
            $registro=$pdo->prepare($registrar);
            $registro->execute(array($codigo, $denominacion));
            
              echo "  </br>Codigo: $codigo  </br> ";
              echo "Denominacion: $denominacion </br>";
}
        else  {
        	echo "No se recibieron los datos";
        }     
       
