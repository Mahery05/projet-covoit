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
	
	<title>OtterCovoit | Accueil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="index.css" >
	<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css"> 
	<link rel="stylesheet" href="jquery-ui-1.8.12.custom.css" type="text/css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/moment.min.js" type="text/javascript"></script>

	
</head>
<body id="body1">


	<!-- Nav-Bar Up ! -->
	<?php include("navbar.php"); ?>
	

		<!-- Ensemble Input Central -->
		<div class="container">    
			<div class="row justify-content-center input-group input-group-lg pad">


				<div id="destinationForm">
					<form action="" method="get" name="direction" id="direction" >


						
						<div id="Adresse_depart" class="col-xs-12 col-md-4">
							<div class="icn">
								<i class="glyphicon glyphicon-pencil" title="Point de départ | Me localiser" alt="départ"></i>
							</div>
							<input type="text" name="origin" id="origin" class="form-control buttonIndexTrajet" placeholder="Lieu départ">
						</div>
						<div id="Adresse_arrivee" class="col-xs-12 col-md-4">
							<div class="icn">
								<i class="glyphicon glyphicon-pencil" title="Point d'arrivé" alt="arrivé"></i>
							</div>
							<input type="text" name="destination" id="destination" class="form-control buttonIndexTrajet" placeholder="Lieu d'arrivé">
						</div>
						<div id="Champs_date" class="col-xs-12 col-md-4">
							<div class="icn">
								<i class="glyphicon glyphicon-calendar"></i>
							</div>
							<input type="date" name="depart" class='form-control buttonIndexTrajet' tabindex="4" />
						</div>
					</form>
				</div>		
			</div>
		</div>



		<!-- test cookie -->
		<!--<p>
			Hé ! Je me souviens de toi !<br />
			Tu e un visiteur et tu es de type <?php echo $_COOKIE['visiteur']; ?> c'est bien ça ?
		</p>-->
		

		<!-- Recherche/Proposition -->
		<div class="marge">
			<div class="center-block text-center">
				<button type="button" class="btn btn-primary btn-lg" onclick="javascript:calculate()" value="Calculer l'itinéraire" >Visualiser le Trajet</button>
				<button type="button" class="btn btn-primary btn-lg" >rechercher le trajet</button>
			</div>
		</div>


		<!-- GoogleMap -->
		<style>
		#map {
			height: 200px;
			width: 50%;
			padding: 200px;
			
		}
	</style>
	
	<div id="container container_map">
		
		<div id="map" class="map_google">
			<p>Veuillez patienter pendant le chargement de la carte...</p>
		</div>
	</div>

	<!-- Include Javascript -->
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery-ui-1.8.12.custom.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fr"></script>
	<script type="text/javascript" src="functions.js"></script>



	<!-- Footer ! -->
	<?php include("footer.php"); ?>

</body>
</html>

