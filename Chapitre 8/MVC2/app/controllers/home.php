<?php

class Home extends Controller
{
	public function index( $name = '')
	{
		//echo "allo " . $name;
		//$user = $this -> model ('User');
		//$user->name = $name;
		parent::view('home/index', ['name' => $name]);
	}

	public function patate ()
	{
		echo "J'aime les patates";
	}
	

}