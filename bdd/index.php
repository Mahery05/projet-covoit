<?php
	session_start();

	if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){
		echo 'Bonjour '. $_SESSION['prenom'] . ' ' . $_SESSION['nom'];
		echo ', voulez vous vous <a href="controler/deconnexion.php">deconnecter ?</a>';
	}
	require('view/indexView.php');
