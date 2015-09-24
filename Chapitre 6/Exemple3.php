<?php

	// Connexion
 
	 try {
		$pdo = new PDO('sqlite:bd.sqlite3');
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}
    /**************************************
    * Création des tables                       *
    **************************************/
	try {
		$pdo->exec("CREATE TABLE IF NOT EXISTS donnees (
						id INTEGER PRIMARY KEY, 
						nom TEXT, 
						prenom TEXT, 
						time INTEGER)");
	 
		$insert = "INSERT INTO donnees (nom, prenom, time) VALUES (:nom, :prenom, :time)";
		$requete = $pdo->prepare($insert);
		$requete->bindValue(':nom', "Di Croci");
		$requete->bindValue(':prenom', "Michel");
		$requete->bindValue(':time', date(DATE_RFC2822));
		
		// Execute la requête
		$requete->execute();
		
		echo "Insertion réussie" . $pdo->lastInsertId();
	}
	catch (PDOException $e)
	{
		echo 'Insertion failed: ' . $e->getMessage();
	}
	
	// ferme la requête
	$pdo = null;
?>

