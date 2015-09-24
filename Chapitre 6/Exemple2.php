<?php
$nom = $_POST["txtNom"];
echo $nom . "<br /><br />";

// $_POST est un array voici pourquoi
foreach ($_POST as $cle => $value)
	echo $cle . ":" . $value . "<br/>";

?>