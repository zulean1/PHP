<?php 

include_once 'conexion/conexion.php';

class User extends Conexion
{
	
	private $nombre;
	private $user;


	public function UserExist($user, $password)
	{
       $md5pass = md5($password);

       $con= $this->pdo->prepare('SELECT * FROM usuario WHERE user= :correo AND password = :password');
       $con->execute(['correo'=> $user, 'password' => $md5pass  ]);
		

		if ($con->rowCount()) {
			return true;
		}
		else{
			return false;
		}
	}

	public function setUser ($user)
	{
	  $con= $this->pdo->prepare('SELECT * FROM usuario WHERE user = :correo ');
       $con->execute(['correo'=> $user]);


       foreach ($con as $usuario ) {
       	 $this->nombre= $usuario['nombre'];
         $this->user= $usuario['correo'];

       }
	}

	public function getUser()
	{
		return $this->nombre;
	}
}

?>