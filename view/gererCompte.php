<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
?>

<!DOCTYPE html>
<html>

<?php 
	$head_title = 'OtterCovoit | Gestion des Comptes'; 
	include $include_path . 'head.php'; 
?>

<body>
	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<h1>Liste des trajets Type</h1>

	<?php 
		if($comptes){
			while($membre = $comptes->fetch()) {
				printMembre($membre);
			}
		}
	?>
	
	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>
</body>
</html>