<?php
include_once 'persona.php';
include_once 'perro.php';

   class Index
{


     public function ejecutar()
      {

         $persona = new Persona('Micaela', 5);
         $perro = new Perro('Tito', 'blanco y negro');
             echo $persona->tocar($perro, 'cabeza') . '<br>';
             echo $persona->darComer($perro, 'carne') . '<br>';
       }
}
$index = new Index();
$index->ejecutar();


