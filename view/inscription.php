<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php 
	$head_title = 'OtterCovoit | Inscription'; 
	include $include_path . 'head.php'; 
?>

<body id="body1">
	
	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<!-- Formulaire d'inscription   
	<div class="container" id="containerMain">
		<div class="pad" id="InputMain" >	
			<form method="post" action="inscription.php">	  
				<p>

					<label for="email">Votre adresse mail :</label>
					<input type="email" placeholder="Email" required/>

					<br />
					<label for="date">Votre date de naissance :</label>
					<input type="date" placeholder="Date Naissance" required/>

					<br />
					<label for="nom">Votre nom :</label>
					<input type="text" name="nom" id="nom" placeholder="Nom" required/>

					<br />
					<label for="prenom">Votre prénom :</label>
					<input type="text" name="prenom" id="prenom" placeholder="Prénom" required/>

					<br />
					<label for="pass">Votre mot de passe :</label>
					<input type="password" name="pass" id="pass" placeholder="Password" required/>

					<br />
					<label for="pass">Votre mot de passe (confirmation) :</label>
					<input type="password" name="confirmpass" id="confirmpass" placeholder="Password Confirmation" required/>

                    <br />
					<label for="numero">Numéro : +33</label>
					<input class="span2" id="prependedInput" type="text" name="telephone" placeholder="Numéro" required>
				<br/>
				<input class="btn btn-primary" type="submit" name="submit" value="S'enregistrer"/>    
			</p>
		</div>  
	</div>
	--> 
	<form method="post" <?php echo 'action="' . $controler_http . 'inscription.php' . '"';?>>

		<table style="text-align: center;" cellpadding="4">
			<tr>
				<td><input type="text" name="prenom" placeholder="Prenom" style="width:100%" required></td>
				<td><input type="text" name="nom" placeholder="Nom" style="width:100%" required></td>
			</tr>

			<tr>
				<td colspan="2">
					<input type="text" name="email" placeholder="E-mail" style="width:100%" required>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<input type="password" name="pass" placeholder="Mot de passe" style="width:100%" required>
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					<input type="password" name="confirmpass" placeholder="Confirmer le mot de passe" style="width:100%" required>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<input type="text" name="num_tel" placeholder="Numero de telephone" style="width:100%" required>
				</td>
			</tr>

		</table>

		<input type="submit" value="S'inscrire"> 
		<a href="connexion.php">Déjà inscrit ?</a>
	</form>
	<!-- Footer ! -->
	<?php include $include_path . 'footer.php'; ?>

</body>
</html>
