<?php 

require_once 'conexion/conexion.php';

class User extends Conexion
{
	
	private $nombre;
	private $correo;

	function __construct(){
		
		parent::__construct();
	}


	public function UserExist($correo, $password)
	{
       //$md5pass = md5($password);

       $conexion= new Conexion();

       $conexion= $this->pdo->prepare('SELECT * FROM usuario WHERE correo =? AND password=?');
       $conexion->execute(array($correo,$password));


		if ($conexion->rowCount()) {
			return true;
		}
		else{
			return false;
		}
	}

	public function setUser ($correo)
	{
	  $con= $this->pdo->prepare('SELECT * FROM usuario WHERE correo=? ');
       $con->execute(array($correo));


       foreach ($con as $usuario ) {
       	 $this->nombre= $usuario['nombre'];
         $this->correo= $usuario['correo'];

       }
	}

	public function getUser()
	{
		return $this->nombre;
	}
}

?>