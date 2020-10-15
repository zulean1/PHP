<?php 


class Persona

 {
	private $_nombre;
	private $_apellido;
	private $_edad;


	public  function Datos ($_nombre, $_apellido, $_edad)
	{
		$this->$_nombre= $_nombre;
		$this->$_apellido= $_apellido;
		$this->$_edad= $_edad;


		echo "$_nombre $_apellido tiene $_edad";
		
	}

    public function tocar($objeto, $lugar)
      {

          return $objeto->tocan($lugar);
      } 


     public function darComer($objeto, $comida)
      {

         return $objeto->comer($comida);
         
       }

      private function parentezco()
      {
      	
      
      }

    

	
}