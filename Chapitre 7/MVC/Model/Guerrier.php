<?php

class Guerrier extends Vie 
{

	function __construct()
	{
		$this->attaque = 10;
		$this->defense = 3;
		$this->pv = 10;
	}

	public function Choix()
	{
		$choix = parent::Choix();
		return $choix;
	}
}

?>