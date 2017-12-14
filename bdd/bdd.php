<!DOCTYPE html>
<html>
	<head>
		<title>BDD COVOITURAGE</title>
	</head>

<body>
	<?php
	ini_set('display_errors', 1); error_reporting(E_ALL); //repère les erreurs
	try {
		$dbh = new PDO('mysql:host=venus; dbname=todorico', "todorico", "12345678");

		$sql = 
		'SELECT NOM, PRENOM, MARQUE, NOM_V 
		FROM MEMBRE, VOITURE_MEMBRE, VOITURE 
		WHERE MAIL = MAIL_MEM 
		AND ID_V = ID_VOIT';
		/*
		
		ADMIN:
		1 creer trajet type
		2 fermer temporairement / definitivement compte membre.
		3 acces statistique: 
		-trajet classé par ordre frequentation, 
		-trajet par bonne note membre,
		-prix moyen pour un trajet,

		MEMBRE:
		1 propose un trajet et prix, 
		-si deja referencé en trajet type alors ne pas depasser plafond de 10 centime / kilomètre.
		-quand trajet terminer, enlever des bdd et donnage avis aux membre
		(OPTION signalé annulation trajet)

		2 accede les trajets données entre deux ville a une date données et aux données personnelles conducteurs.
		(OPTION trié chronologiquement par ordre asc / ou prix crois)

		3 s'inscrire / desinscrire d'un trajet / donner avis sur conducteur.

		INVITÉ:
		2 accede les trajets données entre deux ville a une date données et SELEMENT LES NOM des conducteurs.


		*/
		$sth = $dbh->prepare($sql);
		$sth->execute();

		echo "<table border=1>";
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			echo "<tr>";
			foreach ($row as $value) {
				echo "<th>" . $value . "</th>";
			}
			echo "</tr>";
		}
		echo "</table>";
		$dbh = null;

	}catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	?>
</body>
</html>

