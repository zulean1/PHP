<?php 

include_once 'escuela.php';
include_once 'persona.php';

class Index
{
	
	public function Mostrar()
	{
		$escuela = new Escuela();
        $escuela->Mostrar('Dos corazones');

        $persona = new Persona ();

       
        $persona->Datos('Micaela', 'Rodriguez', 7);

         $persona1 = new Persona ();
        $persona1->Datos('Anastasia','Jimenez', 8);

       



		
	}


}

$index = new Index();
$index->Mostrar();

 ?>