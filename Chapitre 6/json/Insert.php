<?php
	
	if (!empty($_POST))
	{
		include("Donnees.php");
	
		$donnees = new Donnees();
		$donnees->insertData($_POST["firstName"], $_POST["lastName"]);
		
		$var = true;
	}
?>

<html>
<head>
	<title>Insertion de données</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("p").delay(1000).fadeOut(1000);
		});
	</script>
</head>
<body>
<form method="post">

<input type="text" name="firstName">
<input type="text" name="lastName">


<input type="submit">

<?php 
	if (isset($var))
		echo "<p>Insertion Réussie...</p>";
?>
</form>
</body>
</html>