<?php


class Gato
{
	private $_nombre;
	private $_color;

    public function Dato($_nombre, $_color)
   {
      $this->_nombre= $_nombre;
		$this->_color = $_color;

		  echo "el gato es $_nombre y es de color $_color";
   }


}



?>