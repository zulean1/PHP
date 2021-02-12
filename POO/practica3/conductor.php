<?php



class Conductor
{
	private  $_nombre;
	private   $_id;
	

	function __construct($_nombre, $_id)
	{
		$this->_nombre = $_nombre;
		$this->_id = $_id;
		 echo "Datos de Conductor : $_nombre. $_id";
	}
}

 ?>