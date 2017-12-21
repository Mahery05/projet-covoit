<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';

	require_once $model_path . 'model.php';
	
	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pass']) && 
		isset($_POST['confirmpass']) && isset($_POST['email']) && isset($_POST['num_tel'])){

		if($_POST['pass'] != $_POST['confirmpass']){
			echo 'Les mots de passes sont differents';
			require $view_path . 'inscription.php';
		}
		else if(isMember($_POST['email'])){
			echo 'Cette addresse email à déjà été enregistré';
			require $view_path . 'inscription.php';
		}
		else{
			addMember($_POST['email'], $_POST['pass'], $_POST['nom'], $_POST['prenom'], $_POST['num_tel']);
			echo 'Votre compte a bien été créer !';
			header('Location: ' . $root_http . 'index.php');
  			exit();
		}
	}
	else{
		require $view_path . 'inscription.php';
	}
?>