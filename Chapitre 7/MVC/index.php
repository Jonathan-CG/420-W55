<?php 

	// Parse URL
	$path = parse_url($_SERVER["REQUEST_URI"])["path"];
	$path = array_filter(explode("/", $path));

	// Position of index.php in the PATH url
	$pos = array_search("index.php", $path);


	// Get the Controller
	if (isset($path[$pos+1])) {
		$Controller = $path[$pos+1];
	}
	else
	{
		header("Location:index.php/Perso/Creer");
	}

		// Post ou non
	$post = $_SERVER['REQUEST_METHOD'] === 'POST';


	include("Controller/$Controller.php");
	$control = new $Controller($path, $pos, $post);
	
	
?>