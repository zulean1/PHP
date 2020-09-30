<?php 


class Sesion 
{
	
	function __construct()
	{
	    session_start();
	}


	function setUsuario($user){
		$_SESSION['correo']= $user;

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