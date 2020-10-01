<?php 

require_once 'conexion/conexion.php';

class User extends Conexion
{
	
	private $nombre;
	private $user;

	function __construct(){
		
		parent::__construct();
	}


	public function UserExist($user, $password)
	{
       $md5pass = md5($password);

       $conexion= new Conexion();

       $conexion= $this->pdo->prepare('SELECT * FROM usuario WHERE correo=$user AND password = $password');
      $conexion->execute(['correo'=> $user, 'password' => $md5pass  ]);


		if ($conexion->rowCount()) {
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