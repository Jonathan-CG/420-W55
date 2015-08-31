<?php
include ("BD.php");

class Donnees extends BD {

	function insertData($nom, $prenom)
	{
		$insert = "INSERT INTO donnees (nom, prenom, time) VALUES (:nom, :prenom, :time)";
		$requete = $this->pdo->prepare($insert);
		$requete->bindParam(':nom', $nom);
		$requete->bindValue(':prenom', $prenom);
		$requete->bindValue(':time', date(DATE_RFC2822));
		
		// Execute la requête
		$requete->execute();
	}

	function getData()
	{
		$requete = $this->pdo->prepare("SELECT * FROM Donnees");
		// Execute la requête
		$requete->execute();
		return $requete->fetchAll();
		
	}



}