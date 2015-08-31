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
		$requete = $pdo->prepare("SELECT * FROM Donnees");
		// Execute la requête
		$requete->execute();

		while( $result = $requete->fetch(PDO::FETCH_NUM) )
		{		
			foreach($result as $key => $value)
			{
					echo "$key => $value <br>";
			}
		}
	}
	catch (PDOException $e)
	{
		echo 'Connection failed: ' . $e->getMessage();
	}
	
	// ferme la requête
	$pdo = null;
?>

