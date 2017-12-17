<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
	</head>
	
	<body>
		<form method="post" action="../controler/inscription.php">

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

			</table>

			<input type="submit" value="S'inscrire"> 
			<a href="connexion.php">Déjà inscrit ?</a>
		</form>
	</body>
</html>