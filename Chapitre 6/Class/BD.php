<?php 
abstract class BD {
	
	// Accessible pour elle et ses enfants
	protected $pdo;

	function __construct() {
		if (!file_exists("bd.sqlite3")){
			try {
				$this->pdo = new PDO('sqlite:bd.sqlite3');
				
				// Créer la base au complet
				$this->pdo->exec("CREATE TABLE IF NOT EXISTS donnees (
				id INTEGER PRIMARY KEY, 
				nom TEXT, 
				prenom TEXT, 
				time INTEGER)");
		
			} catch (PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
		else {
			$this->pdo = new PDO('sqlite:bd.sqlite3');
		}
	}	
	
	function __destruct() {
		$this->pdo = null;
	}
}

?>