<?php


class Coche
{
	private  $_barrioa;
	private $matricula;
	private $niños= [];
	
	function __construct($matricula, $_barrioa )
	{
		$this->matricula = $matricula;
		$this->_barrioa = $_barrioa;
		echo "Carro : $matricula, esta asignado a $_barrioa";

	}

	public function getNiños(){
		return $this->niños;
	}

	public function BuscarNiños($nombre, $objeto)
	{
		return $objeto->BuscarNiños($nombre);
	}




}