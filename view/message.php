<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
?>

<!DOCTYPE html>
<html>

<?php 
	$head_title = 'OtterCovoit | Message'; 
	include $include_path . 'head.php'; 
?>

<body>
	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<p><?php echo $message;?></p>
	
	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>
</body>
</html>