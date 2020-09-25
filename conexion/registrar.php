<?php 
include 'conexion.php';
class Registrar extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	function registrar ($codigo, $denominacion){  



		if (isset($_POST)) {
            $codigo=$_POST('codigo');
            $denominacion=$_POST('denominacion');

            $registrar= 'INSERT INTO partida (Codigo , Denominacion) VALUES (?,?)';
            $registro=$this->pdo->prepare($registrar);
            return $registro->execute(array($codigo, $denominacion));
}
        else  {
        	echo "No se recibieron los datos";
        }     


	}
}




 ?>