<?php 

include_once 'escuela.php';
include_once 'persona.php';


class Index
{
	
	public function Mostrar()
	{
		//Asignacion de nombre de la escuela
		$escuela = new Escuela();
        $escuela->Mostrar('Dos corazones');

        //Registrando niños
        $persona = new Persona ();
        $persona->Datos('Micaela', 'Rodriguez', 7);

        $persona1 = new Persona ();
        $persona1->Datos('Anastasia','Jimenez', 5);

        $persona2 = new Persona ();
        $persona2->Datos('Roberto','Gonzalez', 8);

        $persona3 = new Persona ();
        $persona3->Datos('Ramona','Hiou', 8);

        $persona4 = new Persona ();
        $persona4->Datos('Enrrique','Guardia', 8);


       //Agregando estudiantes a la escuela
        $escuela= new Escuela();
        $escuela->add($persona);
        $escuela->add($persona1);
        $escuela->add($persona2);
        $escuela->add($persona3);
        $escuela->add($persona4);


       



		
	}


}

$index = new Index();
$index->Mostrar();

 ?>