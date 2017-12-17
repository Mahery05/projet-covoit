<?php

require('../model/model.php');

if(isset($_POST['depart']) && isset($_POST['dest']) /*&& isset($_POST['date_rdv'])*/){
	$trajets = getTrajets($_POST['depart'], $_POST['dest']/*, $_POST['date_rdv']*/);
	//print_r($trajets);
	require('../view/trajetsView.php');
}
else{
	echo 'Des informations sont manquantes !';
}

echo '<a href="../index.php">Retour</a>';

