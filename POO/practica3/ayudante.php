<?php


class Ayudante
{
	private $_nombre;

	function __construct($_nombre)
	{
	  $this->_nombre = $_nombre	;

	  echo "Nombre de Ayudante : $_nombre";
	}

}

?>