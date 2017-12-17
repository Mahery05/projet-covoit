<?php

function getTrajets($ville_dep, $ville_ar/*, $date_rdv*/){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM TRAJET 
						WHERE VILLE_DEP = :ville_dep 
						AND VILLE_AR = :ville_ar 
						/*AND DATE_RDV = :date_rdv*/');

	$req->execute(array(
	    'ville_dep' => $ville_dep,
	    'ville_ar' => $ville_ar
		//'date_rdv' => $date_rdv
	));
	return $req;
}

function addTrajet($ville_dep, $ville_ar, $nb_places){
	$bdd = dbConnect();

	$req = $bdd->prepare('INSERT INTO TRAJET (MAIL_MEMBRE, VILLE_DEP, DATE_RDV, ADR_RDV, VILLE_AR, ADR_AR, TYPE_VOIT, NB_PLACES, PRIX) VALUES ("mailaupif@pif.com", :ville_dep, NULL, "ADR_AU_PIF_DEP", :ville_ar, "ADR_AU_PIF_AR" , "VOIT_AU_PIF", :nb_places, 1000)');

	$req->execute(array(
    'ville_dep' => $ville_dep,
    'ville_ar' => $ville_ar,
    'nb_places' => $nb_places
    ));
}

function isMember($email){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM MEMBRE WHERE MAIL = :email');

	$req->execute(array(
	    'email' => $email
	));

	$resultat = $req->fetch();

	return $resultat;
}

function addMember($nom, $prenom, $email, $pass){
	$bdd = dbConnect();

	//$pass_hache = password_hash($pass, PASSWORD_DEFAULT);
	
	$req = $bdd->prepare('INSERT INTO MEMBRE VALUES (:email, :nom, :prenom, "MONTPELLIER", 12 , 0699999999, 7)');

	$req->execute(array(
    'email' => $email,
    'nom' => $nom,
    'prenom' => $prenom
    ));
}

function updateMember(){

}

function connectMember($email, $pass){
	$bdd = dbConnect();
	// Hachage du mot de passe
	$pass_hache = password_hash($pass, PASSWORD_DEFAULT);
	// Vérification des identifiants
	$req = $bdd->prepare('SELECT * FROM MEMBRE WHERE EMAIL = :email AND MDP = :pass');

	$req->execute(array(
	    'email' => $email,
	    'pass' => $pass
	));

	$resultat = $req->fetch();

	return $resultat;
}

function dbConnect(){
	try {
		$error = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $db = new PDO('mysql:host=localhost;dbname=covoit;charset=utf8','root','', $error);
        return $db;
    } 
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}