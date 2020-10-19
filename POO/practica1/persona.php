<?php

/**

 Creacion de la clase Persona
 */
class Persona

 {
	private $_nombre;
	private $_apellido;


	  function __construct ($_nombre, $_apellido)
	{
		$this->$_nombre= $_nombre;
		$this->$_apellido= $_apellido;

		echo "$_nombre y $_apellido";
		
	}

	public function setagregarE()
	{
        $this->estudiantes  = $estudiantes;
	}

	public function setagregarC()
	{
        $this->conductor = $conductor;
	}

	public function setagregarA()
	{
        $this->ayudante = $ayudante;
	}


	
}