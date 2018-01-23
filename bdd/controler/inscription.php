<?php
	require '../model/model.php';
	
	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pass']) && 
		isset($_POST['confirmpass']) && isset($_POST['email'])){

		if($_POST['pass'] != $_POST['confirmpass']){
			echo 'Les mots de passes sont differents';
			require '../view/inscriptionView.php';
			echo '<a href="../index.php">Retour</a>';
		}
		else if(isMember($_POST['email'])){
			echo 'Cette addresse email à déjà été enregistré';
			require '../view/inscriptionView.php';
			echo '<a href="../index.php">Retour</a>';
		}
		else{
			addMember($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pass']);
			echo 'Votre compte a bien été créer !';
			header('Location: http://localhost/covoit/index.php');
  			exit();
		}
	}
	else{
		require '../view/inscriptionView.php';
		echo '<a href="../index.php">Retour</a>';
	}
