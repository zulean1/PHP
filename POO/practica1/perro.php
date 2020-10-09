<?php


class Perro
{

	private $_nombre;
	private $_color;
	private $_estomago;
	
	public function __construct($_nombre, $_color)
	{
		$this->$_nombre =$_nombre;
		$this->$_color =$_color;

		echo "$_nombre es $_color";

	}

	public function tocan($lugar)
    {
          $retorno = null;
         if($lugar == 'cabeza'){
           $retorno = $this->MoverCola();
         }
        return $retorno;
    }

    public function Comer($comida)
    {
        $this->_estomago = $comida;
        sleep(5);
     return $this->HacerDigestion();
    }


    function HacerDigestion()
    {
        $retorno = null;
        if(isset($this->_estomago)){
            $this->_estomago = null;
            $retorno = $this->HacerKaka();
        }       
    return $retorno;
   } 



    public function MoverCola()
    {
       return 'estoy moviendo la cola';
    }


    public function HacerKaka()
    {
          return 'hago caca!';
    }



}