<?php

class View
{

	public static function Afficher($page, $data){

		$path = "View/" . $page;

		$page = file_get_contents($path);

		foreach($data as $from => $to)
		{
			$page = str_replace("__" . $from . "__", $to, $page);
		}

		echo($page);
	}
}

?>