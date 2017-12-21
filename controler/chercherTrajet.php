<?php

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';

require_once $model_path . 'model.php';

if(isset($_GET['ville_dep']) && isset($_GET['ville_ar']) && isset($_GET['date_dep'])){
	$trajets = getTrajets($_GET['ville_dep'], $_GET['ville_ar'], $_GET['date_dep']);
	require $view_path . 'chercherTrajet.php';
	exit();
}
else{
	require_once $index_path;
	exit();
}

