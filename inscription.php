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
			<div class="pad" id="InputMain" >	
				<form method="post" action="traitement.php">	  
					<p>
						
						<label for="email">Votre adresse mail :</label>
						<input type="email" />

						<br />
						<label for="date">Votre date de naissance :</label>
						<input type="date" />
						
						<br />
						<label for="nom">Votre nom :</label>
						<input type="text" name="nom" id="nom" />

						<br />
						<label for="prenom">Votre prénom :</label>
						<input type="text" name="prenom" id="prenom" />

						<br />
						<label for="ville">Votre ville :</label>
						<input type="text" name="ville" id="ville" />
						
						<br />
						<label for="pass">Votre mot de passe :</label>
						<input type="password" name="pass" id="pass" />

						<br />
						<label for="ameliorer"> Une rapide description de vous ?(optionnel)</label>
						
						<br />
						<textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
						</textarea>	    
					</p>
				</div>  
			</div>


			
			<!-- Footer ! -->
			<?php include("footer.php"); ?>


		</body>
		</html>
