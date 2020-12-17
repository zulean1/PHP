<?php
include_once 'escuela.php';
include_once 'coches.php';
include_once 'ayudante.php';
include_once 'persona.php';
include_once 'conductor.php';

class Index
{
	public function ejecutar()
	{
		//Localizacion ubicada
		$escuela= new Escuela('Los dos caminos');

        //Coches

        $coche1 = new  Coche('Coche 1' , 'Chupadero' );
        $coche2 = new Coche('Coche 2', 'Las Casitas');
        $coche3 = new Coche('Coche 3', 'Dos Quebradas');


        //Ayudante

        $ayudante1 = new  Ayudante('Mario');
        $ayudante2 = new  Ayudante('Carlos');
        $ayudante3 = new  Ayudante('Esteban');

        //Conductor

        $conductor1 = new Conductor('Mario');
        $conductor2 = new Conductor('Carlos');
        $conductor3 = new Conductor('Esteban');


       $persona = new Persona('ramon');

	}
}

$index = new Index ();
$index->ejecutar();


?>