<?php
	session_start();

	require '../model/model.php';

	if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){
		echo 'Bonjour '. $_SESSION['prenom'] . ' ' . $_SESSION['nom'];

		if(isset($_POST['depart']) && isset($_POST['dest']) && isset($_POST['nbplaces'])){
			addTrajet($_POST['depart'], $_POST['dest'], $_POST['nbplaces']);
			header('Location: http://localhost/covoit/index.php');
			exit();
		}
		else{
			require '../view/ajoutTrajetView.php';
		}
	}
	else{
		echo 'Connectez-vous pour proposer un trajet<br/>';
	}
	echo '<a href="../index.php">Retour</a>';