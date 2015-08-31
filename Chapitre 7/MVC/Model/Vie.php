<?php

class Vie 
{

	protected $pv = 0;
	protected $attaque;
	protected $defense;
	public $nom;

	protected function Attaquer($o_defense){
		return 0;
	}

	protected function Defense(){
		return 0;
	}

	protected function Fuir(){
		return 0;
	}

	protected function Choix()
	{
		$choix = array("Attaquer", "Defense", "Fuir");
		return $choix;
	}
}

?>