<!DOCTYPE html>
<html>
<head>
	<title>BDD COVOITURAGE</title>
</head>
<body>
	<?php
	try {
		$dbh = new PDO('mysql:host=venus;dbname=todorico', "todorico", "12345678");
		
		$dbh->query('@creation.sql');
		$dbh->query('@remplissage.sql');

		$reponse = $dbh->query('SELECT * FROM ABONNE');

		while($donnees = $reponse->fetch()){
			echo $donnees;
		}

		$dbh = null;
// fermeture connexion
	}catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	?>
</body>
</html>