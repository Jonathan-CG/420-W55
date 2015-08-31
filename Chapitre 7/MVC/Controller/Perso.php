<?php
include_once("Model/Vie.php");
include_once("Model/Magicien.php");
include_once("Model/Clerc.php");
include_once("Model/Guerrier.php");
include_once("View/View.php");

class Perso {

	private $perso;

	function __construct($path, $pos, $post){
		session_start();

		// Déjà un personnage
		/*
		if (isset($_SESSION["perso"]))
		{ 
			$this->perso = $_SESSION["perso"];
			$this->Combat();
		}
		else{
			$this->Creer();
			//$this->perso = new Clerc();
		}
		*/

		if (isset($path[$pos+2]))
		{
			$method = $path[$pos+2];
			if ($post)
				$method = $method . "_POST";

			$this->$method();
		}

	}	

	function __destruct(){
		$_SESSION["perso"] = $this->perso;
//		session_destroy();
	}

	function Creer() {
		View::Afficher("Creer.html", Array());
	}

	function Creer_POST(){
		$classe = $_POST["Classe"];
		$this->perso = new $classe();
		$this->perso->nom = $_POST["Nom"];
		echo "Personnage créé";
	}

	function Combat()
	{
		View::Afficher("Combat.html", Array());
	}

	function Combat_POST()
	{
		return 0;
	}

}