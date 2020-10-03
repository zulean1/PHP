<?php 

 
 include_once 'sesion/user.php';
 include_once 'sesion/sesion.php';
 


 $sesion = new Sesion ();
 $user = new User();




 if (isset($_SESSION['correo'])) {
   
     $user->setUser($sesion->getUsuario());
     include_once 'public/views/home.php';
   }

 elseif (isset($_POST['correo']) && isset($_POST['password'])) {

 	    $viewco= $_POST['correo'];
    	$viewpas= $_POST['password'];


 	if ($user->UserExist($viewco,$viewpas)) {

    $sesion->setUsuario($viewco);
    $user->setUser($viewco);
 
 		include_once 'public/views/home.php';
 	}
 	else{
    	
       $errorlogin ="Nombre de usuario y/o contraseña incorrecta";
       include_once 'public/views/login.php';
    }
    	}

  else {
  	
  	include_once 'public/views/login.php';
  }
 
 	


?>