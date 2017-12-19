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
<body>


<!-- Nav-Bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			
			<!-- Input Left-Nav-Bar -->
			<div class="navbar-header">
				<a class="navbar-brand" href="Index.php">OtterCovoit</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="Index.php">Accueil</a></li>
			</ul>

			<!-- Input Righ-Nav-Bar -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="proposition.php"><span class="glyphicon glyphicon-plus-sign"></span>Proposition-Trajet</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Connexion
						<span class="caret"></span>
					</a>   
					<ul class="dropdown-menu">
						<form method="post" action="formulairetest.php">
							<center>
								<li>
									<label for="usr"> Adresse-Mail :</label>
									<input type="text" id="email"  class="form-control">
								</li>
								
								<li>
									<label for="usr"> Mot de passe :</label>
									<input type="text" class="form-control" id="usr">
								</li>
								<li>
									<input type="submit" value="Envoyer" />
								</li>
							</center>
						</ul>
					</li>
					<li><a href="inscription.php"><span class="glyphicon glyphicon-log-in"></span> S'inscrire</a></li>
				</ul>
			</div>
		</nav>


			</body>
	</html>