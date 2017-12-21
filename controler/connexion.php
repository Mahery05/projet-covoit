<?php
	
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';

	require_once $model_path . 'model.php';

	if(isset($_POST['email']) && isset($_POST['pass'])){

		$member = connectMember($_POST['email'], $_POST['pass']);
		$admin = isAdmin($_POST['email']);
		$banni = isBanni($_POST['email']);

		if (!$member){
			
			$connexion_message = 'Mauvais identifiant ou mot de passe !';
			require $view_path . 'connexion.php';
		    exit();
		}
		else{
			
		    $_SESSION['email'] = $member['email'];
		    $_SESSION['prenom'] = $member['prenom'];
		    $_SESSION['nom'] = $member['nom'];
		    $_SESSION['mdp'] = $member['mdp'];
		    $_SESSION['admin'] = $admin;
		    $_SESSION['banni'] = $banni;

		    if(isset($_POST['check'])){
		    	setcookie('email', $member['email'], time() + 365 * 24 * 3600, null, null, false, true);
		    	setcookie('prenom', $member['prenom'], time() + 365 * 24 * 3600, null, null, false, true);
		    	setcookie('nom', $member['nom'], time() + 365 * 24 * 3600, null, null, false, true);
		    	setcookie('mdp', $member['mdp'], time() + 365 * 24 * 3600, null, null, false, true);
		    	setcookie('admin', $admin, time() + 365 * 24 * 3600, null, null, false, true);
		    	setcookie('banni', $banni, time() + 365 * 24 * 3600, null, null, false, true);
		    	setcookie('remember', true, time() + 365 * 24 * 3600, null, null, false, true);
		    }
		    else{
		    	setcookie('remember', false, time() + 365 * 24 * 3600, null, null, false, true);
		    }
		    	
		    header('Location: ' . $index_http);
		   	exit();
		}
	}
	else{
		$connexion_email = '';
		$connexion_mdp = '';
		$connexion_remember = false;

		if(isset($_COOKIE['email']) && isset($_COOKIE['mdp']) && isset($_COOKIE['remember'])){
			$connexion_email = $_COOKIE['email'];
			$connexion_mdp = $_COOKIE['mdp'];
			$connexion_remember = $_COOKIE['remember'];
		}

		require $view_path . 'connexion.php';
	}