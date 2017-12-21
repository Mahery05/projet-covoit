<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';

$searchbar_ville_dep = '';
$searchbar_ville_ar = '';
$searchbar_date_dep = '';

if(isset($_GET['ville_dep']) && isset($_GET['ville_ar']) && isset($_GET['date_dep'])){
	$searchbar_ville_dep = $_GET['ville_dep'];
	$searchbar_ville_ar = $_GET['ville_ar'];
	$searchbar_date_dep = $_GET['date_dep'];
}

?>

<!-- Ensemble Input Central
<div class="container">   
	<div class="row justify-content-center input-group input-group-lg pad" id="searchBar">
		<div id="destinationForm" >
			<form <?php echo 'action="' . $controler_http . 'chercherTrajet'. '"'; ?> method="post" name="direction" id="direction" >
				
				<div id="Adresse_depart" class="col-xs-12 col-md-3">
					<div class="icn">
						<i class="glyphicon glyphicon-pencil" title="Point de départ | Me localiser" alt="départ"></i>
					</div>
					<input type="text" name="ville_dep" id="origin" class="form-control buttonIndexTrajet" placeholder="Lieu départ">
				</div>

				<div id="Adresse_arrivee" class="col-xs-12 col-md-3">
					<div class="icn">
						<i class="glyphicon glyphicon-pencil" title="Point d'arrivé" alt="arrivé"></i>
					</div>
					<input type="text" name="ville_ar" id="destination" class="form-control buttonIndexTrajet" placeholder="Lieu d'arrivé">
				</div>

				<div id="Champs_date" class="col-xs-12 col-md-3">
					<div class="icn">
						<i class="glyphicon glyphicon-calendar"></i>
					</div>
					<input type="date" name="date_dep" class='form-control buttonIndexTrajet' tabindex="4" />
				</div>

				<div class="icn col-xs-12 col-md-3">
					<div class="icn">
						<i class="glyphicon glyphicon-search"></i>
					</div>
					<input class="form-control buttonIndexTrajet" type="submit" name="submit" value=" Chercher trajet "/>
				</div>
			</form>
			
		</div>		
	</div>
</div>
-->


<form method="get" <?php echo 'action="' . $controler_http . 'chercherTrajet'. '"'; ?>>
		
	<input type="text" name="ville_dep" placeholder="Départ" <?php echo 'value="'.$searchbar_ville_dep.'"'; ?> required>

	<input type="text" name="ville_ar" placeholder="Arrivée" <?php echo 'value="'.$searchbar_ville_ar.'"'; ?> required>

	<input type="date" name="date_dep" placeholder="AAAA-MM-JJ" <?php echo 'value="'.$searchbar_date_dep.'"'; ?> required>

	<input type="submit" name="submit" value="Chercher">
</form>