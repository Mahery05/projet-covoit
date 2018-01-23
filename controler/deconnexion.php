<?php
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/include/path.php';

	$_SESSION = array();
	session_destroy();
	/*
	setcookie('email', '', time() + 365 * 24 * 3600, null, null, false, true);
	setcookie('prenom', '', time() + 365 * 24 * 3600, null, null, false, true);
	setcookie('nom', '', time() + 365 * 24 * 3600, null, null, false, true);
	setcookie('mdp', '', time() + 365 * 24 * 3600, null, null, false, true);
	setcookie('admin', '', time() + 365 * 24 * 3600, null, null, false, true);
	setcookie('admin', '', time() + 365 * 24 * 3600, null, null, false, true);
	*/
	header('Location: ' . $index_http);
	exit();