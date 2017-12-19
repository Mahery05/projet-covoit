<?php
	require '../model/model.php';

	if(isset($_POST['email']) && isset($_POST['pass'])){
		$member = isMember($_POST['email']);
		if (!$member){
		    echo 'Mauvais identifiant ou mot de passe !';
		}
		else{
		    session_start();
		    $_SESSION['email'] = $member['email'];
		    $_SESSION['prenom'] = $member['prenom'];
		    $_SESSION['nom'] = $member['nom'];

		    if(isset($_POST['check']) && $_POST['check']){
		    	setcookie('email', $member['email'], time() + 3600, null, null, false, true);
		    	setcookie('prenom', $member['prenom'], time() + 3600, null, null, false, true);
		    	setcookie('nom', $member['nom'], time() + 3600, null, null, false, true);
		    }
		    
		    echo 'Vous êtes connecté !';
		    header('location: http://localhost/covoit/index.php');
		    exit();
		}
	}
	else{
		require '../view/connexionView.php';
		echo '<a href="../index.php">Retour</a>';
	}
