<?php
	include("Donnees.php");
	
	$donnees = new Donnees();
	$array = $donnees->getData();
?>

<html>
<head>
	<title>Transfert en javascript</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript">
		var data = <?php echo(json_encode($array)) ?>;
	
		$(function(){
			
			// Pour chacune des données de data
			for(var i=0; i < data.length; i++)
			{
				// Loop sur chaque colonne et affiche les données dans le HTML
				theDate = new Date(data[i]["time"]);
				$("body").append("<div><p>Bonjour " + data[i]["prenom"] + " " + data[i]["nom"] + ". Vous vous êtes ajoutés cette date " + theDate.toLocaleTimeString() + ". <br>");
			}
		});
	</script>
</head>
<body>

</body>
</html>

