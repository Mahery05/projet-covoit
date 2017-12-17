<?php
	require '../model/model.php';

	if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['check'])){
		$member = isMember($_POST['email']);
		if (!$member){
		    echo 'Mauvais identifiant ou mot de passe !';
		}
		else{
		    session_start();
		    $_SESSION['email'] = $member['MAIL'];
		    $_SESSION['prenom'] = $member['PRENOM'];
		    $_SESSION['nom'] = $member['NOM'];

		    if($_POST['check']){
		    	setcookie('email', $member['MAIL'], time() + 3600, null, null, false, true);
		    	setcookie('prenom', $member['PRENOM'], time() + 3600, null, null, false, true);
		    	setcookie('nom', $member['NOM'], time() + 3600, null, null, false, true);
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
