<?php

class Magicien extends Vie 
{

	function Projectile(){
		return 0;
	}

	function __construct()
	{
		$this->attaque = 8;
		$this->defense = 1;
		$this->pv = 6;
	}

	public function Choix()
	{
		$choix = parent::Choix();
		array_push($choix, "Projectile Magique");
		return ($choix);
	}
}

?>