<?php

class Clerc extends Vie 
{
	function Guerir(){
		return 0;
	}

	function __construct()
	{
		$this->attaque = 9;
		$this->defense = 2;
		$this->pv = 8;
	}

	public function Choix()
	{
		$choix = parent::Choix();
		array_push($choix, "Guérison");
		return $choix;
	}
}

?>