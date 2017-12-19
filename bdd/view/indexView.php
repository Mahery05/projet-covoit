<!DOCTYPE html>
<html>
<head>
	<title>OtterCovoit | Acceuil</title>
</head>
<body>
	<h1>OtterCovoit</h1>
	<a href="controler/inscription.php">Inscription</a>
	<a href="controler/connexion.php">Connexion</a>
	<a href="controler/ajoutTrajet.php">Proposez un trajet</a>

	<form method="post" action="controler/trajets.php">
		<input type="text" name="depart" placeholder="Depart" required>
		<input type="text" name="dest" placeholder="Destination" required>
		<!--<input type="text" name="date_rdv" placeholder="Date" required>-->
		<input type="submit" value="Rechercher">
	</form>
</body>
</html>