<?php 

class Conductor
{
	private  $_nombre;
	

	function __construct($_nombre)
	{
		$this->_nombre = $_nombre;
		 echo "Nombre de Conductor : $_nombre";
	}
}

 ?>