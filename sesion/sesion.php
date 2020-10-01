<?php 


class Sesion 
{
	
	function __construct()
	{
	    session_start();
	}


	function setUsuario($correo){
		$_SESSION['correo']= $correo;

	}

	function getUsuario(){
		return $_SESSION['correo'];
	}

	function Close(){
		session_unset();
		session_destroy();
	}
}





 ?>