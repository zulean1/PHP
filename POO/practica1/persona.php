<?php

/**

 Creacion de la clase Persona
 */
class Persona

 {
	private $_nombre;
	private $_edad;


	  function __construct ($_nombre, $_edad)
	{
		$this->$_nombre= $_nombre;
		$this->$_edad= $_edad;

		echo "$_nombre tiene $_edad";
		
	}

     function tocar($objeto, $lugar)
      {

          return $objeto->tocan($lugar);
      } 


     function darComer($objeto, $comida)
      {

         return $objeto->comer($comida);
         
       }

	
}