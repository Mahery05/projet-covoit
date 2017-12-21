<?php
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';

	require $model_path . 'model.php';

	if(isset($_SESSION['email']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])){

		if(isset($_POST['ville_dep']) && isset($_POST['ville_ar']) && 
			isset($_POST['adresse_dep']) && isset($_POST['adresse_ar']) && 
			isset($_POST['date_dep']) && isset($_POST['type_voit']) && 
			isset($_POST['nb_places']) && isset($_POST['prix'])){

			addTrajet($_SESSION['email'], $_POST['ville_dep'], $_POST['ville_ar'], 
				$_POST['adresse_dep'], $_POST['adresse_ar'], 
				$_POST['date_dep'], $_POST['type_voit'], 
				$_POST['nb_places'], $_POST['prix']);

			$message = 'Votre trajet à bien été pris en compte !';
			require $view_path . 'message.php';
			exit();
		}
		else{
			require $view_path . 'proposerTrajet.php';
		}
	}
	else{
		$message = 'Connectez-vous pour proposer un trajet !';
		require $view_path . 'message.php';
		exit();
	}