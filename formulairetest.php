<?php
// On démarre la session AVANT d'écrire du code HTML
session_start(); ?>

<?php 
setcookie('visiteur', 'invisible', time() + 24*3600, null, null, false, true); // Cookie Statue Visiteur
/*setcookie('email', '', time() + 24*3600, null, null, false, true); */ // Cookie Verif connexion
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OtterCovoit | Inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css" >
	<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css">

	<!-- Script Google -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/moment.min.js" type="text/javascript"></script>


	

</head>


<body id="body1">
	
	<!-- Nav-Bar Up ! -->
	<?php include("navbar.php"); ?>



		<!-- Formulaire d'inscription -->		
		<div class="container" id="containerMain">
			<center>
				<div class="pad" id="InputMain2" >
					
					<p><?php echo $_POST['mail']; ?></br>
						<?php echo $_POST['dateD']; ?></br>
						<?php echo $_POST['villeDep']; ?></br>
						<?php echo $_POST['villeArr']; ?></br>
						<?php echo $_POST['voiture']; ?></br>
						<?php echo $_POST['place']; ?></br>
						<?php echo $_POST['prix']; ?></br></p>
					</div>
				</center>
			</div>
			
			


			<!-- Footer ! -->
			<?php include("footer.php"); ?>


		</body>
		</html>





		<!-- <p>Je sais que tu vas à <?php echo $_POST['villeDep']; ?> jusqu'à <?php echo $_POST['villeArr']; ?> le <?php echo $_POST['dateD']; ?> !</p> -->
