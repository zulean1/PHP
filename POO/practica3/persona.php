<?php

class Persona
{

   private $_nombre;
   private $_id;

   function __construct($_nombre, $_id)
   {

   	$this->_nombre = $_nombre;
   	$this->_id = $_id;
  
    }

    function  getNombre($_nombre){
    	 return $this->_nombre ;
    }

}


