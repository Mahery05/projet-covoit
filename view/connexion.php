<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
?>

<!DOCTYPE html>

<html lang="en">


<?php 
	$head_title = 'OtterCovoit | Connexion'; 
	include $include_path . 'head.php'; 
?>

<body id="body1">

	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<?php 
	if(isset($connexion_message)){
		echo '<p>' . $connexion_message . '</p>';
	}
	?>
	<!--
	<div class="container" id="containerMain">
		<div class="pad" id="InputMain" >	
			<form method="post" action="../controler/connexion.php">	  
				<p>

					<?php //<label for="email">Votre adresse mail :</label> ?>
					<input type="text" name="email" placeholder="E-mail" required>


					<br />
					<?php //<label for="pass">Votre mot de passe :</label> ?>
					<input type="password" name="pass" placeholder="Mot de passe" required>

					<br />
					<input type="checkbox" name="check">
					<label for="check">Se souvenir de moi ?</label>


					<br/>
					<input class="btn btn-primary" type="submit" name="submit" value="Se connecter"/>    
				</p>
			</div>  
		</div>
	-->

	<form method="post" <?php echo 'action="' . $controler_http . 'connexion.php' . '"';?>>

		<table cellpadding="4">

			<tr>
				<td>
					<input type="text" name="email" placeholder="E-mail" 
					<?php echo 'value="' . $connexion_email . '"'; ?> required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="password" name="pass" placeholder="Mot de passe" 
					<?php echo 'value="' . $connexion_mdp . '"'; ?> required>
				</td>
			</tr>

			<tr>
				<td>
					<input type="checkbox" name="check" 
					<?php if($connexion_remember){echo 'checked';}?>> Se souvenir de moi 
				</td>
			</tr>

		</table>

		<input type="submit" value="Se connecter"> 
		<a href="inscription.php">Pas encore inscrit ?</a>
	</form>

	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>

</body>
</html>


