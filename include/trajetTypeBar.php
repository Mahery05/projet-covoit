<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';

?>

<form method="post" <?php echo 'action="' . $controler_http . 'trajetType'. '"'; ?>>
		
	<input type="text" name="ville_dep" placeholder="Départ" required>

	<input type="text" name="ville_ar" placeholder="Arrivée" required>
	
	<input type="number" name="distance" placeholder="Distance" required>
	
	<input type="text" name="temps_moyen" placeholder="Temps moyen" required>

	<input type="submit" name="submit" value="Ajouter">
</form>