<?php

class Persona
{

   private $_nombre;

   function __construct($_nombre)
   {
   	$this->_nombre =  $_nombre;

   	echo "Nombre estudiante : $_nombre";
   }
}


