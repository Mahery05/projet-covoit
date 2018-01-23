<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/include/path.php';
<?php /*echo $root_http <*/
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<title>OtterCovoit | F.A.Q </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/test.css" >
	<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css">

	<!-- Script Google -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/moment.min.js" type="text/javascript"></script>

	
</head>

<body id="body1">

	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>
	
	<!-- Ensemble Input Central -->
	<?php include $include_path . 'searchbar.php'; ?>

	<!-- <div> <p> <?php //echo $_SESSION['prenom']; ?></p></div> -->

	<!-- Visualisation Trajet Google Map -->
	<div class="marge">
		<div class="center-block text-center">
			<button type="button" class="btn btn-primary btn-lg" onclick="javascript:calculate()" value="Calculer l'itinéraire" >Visualiser le Trajet</button>
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBfwQG37RGEOIav93FUFkGss8XkbcjAlqY&callback=initMap"></script>
	<script type="text/javascript" src="../../js/functions.js"></script>


	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>

</body>
</html>