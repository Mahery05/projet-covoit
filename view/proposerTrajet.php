<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php 
	$head_title = 'OtterCovoit | Proposition'; 
	include $include_path . 'head.php'; 
?>

<body id="body1">
	
	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<!-- Formulaire de proposition de trajet   
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
				<form>
			</div>
		</center>
	</div>
	-->  

	<form method="post" <?php echo 'action="' . $controler_http . 'proposerTrajet.php' . '"';?>>

		<table cellpadding="4">

			<tr>
				<td>
					<input type="text" name="ville_dep" placeholder="Depart" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="ville_ar" placeholder="Destination" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="adresse_dep" placeholder="Adresse de depart" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="adresse_ar" placeholder="Adresse d'arrivée" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="date_dep" placeholder="Date de depart" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="text" name="type_voit" placeholder="Type de voiture" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="number" name="nb_places" placeholder="Nombre de places" required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="number" name="prix" placeholder="Prix" required>
				</td>
			</tr>

		</table>

		<input type="submit" value="Proposer"> 
	</form>
		
	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>

</body>
</html>
