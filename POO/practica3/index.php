<?php
include_once 'escuela.php';

class Index
{
	
	public function ejecutar()
	{
		//Localizacion ubicada
		$escuela= new Escuela('Los dos caminos');
		
	}
}

$index = new Index ();
$index->ejecutar();

?>