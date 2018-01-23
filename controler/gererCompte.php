<?php

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/include/path.php';

require_once $model_path . 'model.php';

if(isset($_POST['email'])){
	deleteMember($_POST['email']);
}

$comptes = getMembers();
require $view_path . 'gererCompte.php';
exit();