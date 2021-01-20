<?php


class Escuela
{
    private $nombre;
    private  $ubicacion;
	
	function __construct($ubicacion)
	{
	 
       $this->ubicacion = $ubicacion;
	  echo "La escuela esta ubicada en : $ubicacion";

	}

	function getCochesEscolares ($coches)
	{
		$coches =[];
	}


}