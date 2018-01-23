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



	<!-- Formulaire de proposition de trajet -->    
	<div class="container" id="containerMain">
		<center>
			<div class="pad" id="InputMain2" >	
				<form method="post" action="formulairetest.php">	  
					<p>
						
						<label for="email">Adresse mail :</label>
						<input type="email" name="mail" autofocus required/>

						<br />
						<label for="date">Date du trajet :</label>
						<input type="date" name="dateD" recquired/>
						
						<br />
						<label for="villeDep">Ville départ :</label>
						<input type="text" name="villeDep" id="villeDep" required/>

						<br />
						<label for="villeArr">Ville arrivée :</label>
						<input type="text" name="villeArr" id="villeArr" required/>

						<br />
						<label for="voiture">Type voiture :</label>
						<input type="text" name="voiture" id="voiture" required/>
						
						<br />
						<label for="place">Nombre place :</label>
						<input type="text" name="place" id="place" required/>

						<br />
						<label for="prix"> Prix du trajet:</label>
						<input type="text" name="prix" id="prix" required/>

						<input type="submit" value="Envoyer" />										
					</p>
				</div>
			</center>
		</div>


		
		<!-- Footer ! -->
		<?php include("footer.php"); ?>


	</body>
	</html>
