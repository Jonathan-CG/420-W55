<?php
include_once("Model/Vie.php");
include_once("Model/Magicien.php");
include_once("Model/Clerc.php");
include_once("Model/Guerrier.php");
include_once("View/View.php");

class Controller {

	private $perso;

	function __construct(){
		session_start();

		// Déjà un personnage
		if (isset($_SESSION["perso"]))
		{ 
			$this->perso = $_SESSION["perso"];
			$this->Combat();
		}
		else{
			$this->Creer();
			$this->perso = new Clerc();
		}

		// Post ou non
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			echo "on est dans un POST";
			$post = true;
		}

		// Parse URL
		$path = parse_url($_SERVER["REQUEST_URI"])["path"];
		$path = array_filter(explode("/", $path));

		// Position of index.php in the PATH url
		$pos = array_search("index.php", $path);

		// get the one afterwards (methods, if any)
		if (isset($path[$pos+1])) {
			$method = $path[$pos+1];
			if ($post)	{
				$method = $method . "_POST";
			}
			$this->$method();
		}

	}	

	function __destruct(){
		$_SESSION["perso"] = $this->perso;
	}

	function Creer() {
		View::Afficher("Creer.html", Array());
	}

	function Creer_POST(){
		$classe = $_POST["Classe"];
		$this->perso = new $classe();
		$this->perso->nom = $_POST["Nom"];
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