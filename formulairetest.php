<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OtterCovoit | Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css" >
    <link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css">

    <!-- Script Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/moment.min.js" type="text/javascript"></script>


    

  </head>


  <body id="body1">
    
    <!-- Nav-Bar -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      
      <div class="container-fluid">
	
	<div class="navbar-header">  
	  <a class="navbar-brand" href="Index.html">OtterCovoit</a>
	</div>
	
	<ul class="nav navbar-nav ">
	  <li class="active"><a href="Index.html">Accueil</a></li>
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
	  <li><a href="proposition.html"><span class="glyphicon glyphicon-plus-sign"></span>Proposition-Trajet</a></li>
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
	  
	  <li><a href="inscription.html"><span class="glyphicon glyphicon-log-in"></span> S'inscrire</a></li>
	  
	</ul>
      </div>
    </nav>

    <!-- Formulaire d'inscription -->
    

    <div class="container" id="containerMain">
      <center>
	<div class="pad" id="InputMain2" >
	  
	  <p><?php echo $_POST['mail']; ?></br>
	    <?php echo $_POST['dateD']; ?></br>
	    <?php echo $_POST['villeDep']; ?></br>
	    <?php echo $_POST['villeArr']; ?></br>
	    <?php echo $_POST['voiture']; ?></br>
	    <?php echo $_POST['place']; ?></br>
	    <?php echo $_POST['prix']; ?></br></p>
	</div>
      </center>
    </div>
    
    


    
    <footer>
      <div class="pied">
	<a href="https://www.facebook.com/OtterLovers">
	  <img class="logo" src="image/facebook.png"  alt="FacebookOtter">
	</a>
	Pour toute demande, nous contactez sur les reseaux sociaux
	<a href="Faq.html">
	  <img class="logo" src="image/faq.jpg"  alt="faq">
	</a>
	Notre mail: OtterCoivot@gmail.com
	<a href="https://twitter.com/CutestOtters">
	  <img class="logo" src="image/twitter.png"  alt="TwittOtter">
	</a>
      </div>
    </footer>


  </body>
</html>





<!-- <p>Je sais que tu vas à <?php echo $_POST['villeDep']; ?> jusqu'à <?php echo $_POST['villeArr']; ?> le <?php echo $_POST['dateD']; ?> !</p> -->
