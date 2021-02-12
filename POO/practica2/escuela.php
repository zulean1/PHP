<?php 


class Escuela
{

	private $_nombre;
	


   public function mostrar($_nombre)
{
      $this->_nombre = $_nombre;


      echo $_nombre;

}

  public function add($objeto){
  	echo "Alumnos registrados";
  	return $objeto;
  }

 

}



