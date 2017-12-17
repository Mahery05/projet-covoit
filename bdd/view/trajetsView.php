<!DOCTYPE html>
<html>
<head>
	<title>OtterCovoit | Trajets</title>
</head>
<body>
	<h1>Voici la liste des trajets</h1>
	<?php  
		echo "<table border=1>";
		while($row = $trajets->fetch(PDO::FETCH_ASSOC)) {
			echo "<tr>";
			foreach ($row as $value) {
				echo "<th>" . $value . "</th>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>