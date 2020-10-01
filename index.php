<?php 

 
 include_once 'sesion/user.php';
 include_once 'sesion/sesion.php';


 $sesion = new Sesion ();
 $user = new User();




 if (isset($_SESSION['correo'])) {
    echo "Se inicio sesion";

   }

 elseif (isset($_POST['correo']) && isset($_POST['password'])) {

 	    $viewco= $_POST['correo'];
    	$viewpas= $_POST['password'];


 	if ($user->UserExist($viewco,$viewpas)) {
 
 		echo "Usuario existe";
 	}
 	else{
    	
       $errorlogin ="Nombre de usuario y/o contraseña incorrecta";
       include_once 'sesion/login.php';
    }
    	}

  else {
  	
  	include_once 'sesion/login.php';
  }
 
 	


?>