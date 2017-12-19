<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
	</head>
	
	<body>
		<form method="post" action="../controler/connexion.php">

			<table cellpadding="4">

				<tr>
					<td>
						<input type="text" name="email" placeholder="E-mail" required>
					</td>
				</tr>

				<tr>
					<td>
						<input type="password" name="pass" placeholder="Mot de passe" required>
					</td>
				</tr>

				<tr>
					<td>
						<input type="checkbox" name="check"> Se souvenir de moi
					</td>
				</tr>

			</table>

			<input type="submit" value="Se connecter"> 
			<a href="inscription.php">Pas encore inscrit ?</a>
		</form>
	</body>
</html>