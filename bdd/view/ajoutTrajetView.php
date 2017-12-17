<!DOCTYPE html>
<html>
	<head>
		<title>Ajout trajet</title>
	</head>
	
	<body>
		<form method="post" action="../controler/ajoutTrajet.php">

			<table cellpadding="4">

				<tr>
					<td>
						<input type="text" name="depart" placeholder="Depart" required>
					</td>
				</tr>

				<tr>
					<td>
						<input type="text" name="dest" placeholder="Destination" required>
					</td>
				</tr>

				<tr>
					<td>
						<input type="text" name="nbplaces" placeholder="Nombre de places" required>
					</td>
				</tr>

			</table>

			<input type="submit" value="Ajouter"> 
		</form>
	</body>
</html>