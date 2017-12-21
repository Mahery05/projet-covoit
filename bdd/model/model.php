<?php

function addTrajet($email, $ville_dep, $ville_ar, $adresse_dep, $adresse_ar, $date_dep, $type_voit, $nb_places, $prix){
	$bdd = dbConnect();

	$req = $bdd->prepare('INSERT INTO TRAJET 
	(email_conducteur, ville_dep, ville_ar, adresse_dep, adresse_ar, date_dep, type_voit, nb_places, prix) 
	VALUES 
	(:email, UPPER(:ville_dep),  UPPER(:ville_ar), :adresse_dep, :adresse_ar, :date_dep, :type_voit, :nb_places, :prix)');

	$req->execute(array(
	'email' => $email,
    'ville_dep' => $ville_dep,
    'ville_ar' => $ville_ar,
    'adresse_dep' => $adresse_dep,
    'adresse_ar' => $adresse_ar,
    'date_dep' => $date_dep,
    'type_voit' => $type_voit,
    'nb_places' => $nb_places,
    'prix' => $prix
    ));
}

function getTrajets($ville_dep, $ville_ar, $date_dep){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM TRAJET 
						WHERE ville_dep = :ville_dep 
						AND ville_ar = :ville_ar 
						AND date_dep = :date_dep');

	$req->execute(array(
	    'ville_dep' => $ville_dep,
	    'ville_ar' => $ville_ar,
		'date_dep' => $date_dep
	));

	return $req;
}

function addMember($email, $pass, $nom, $prenom, $num_tel){
	$bdd = dbConnect();

	$mdp = $pass; //password_hash($pass, PASSWORD_DEFAULT);

	$req = $bdd->prepare('INSERT INTO MEMBRE (email, mdp, nom, prenom, num_tel, adresse, date_naissance) 
	VALUES (:email, :mdp, :nom, :prenom, :num_tel, NULL, NULL)');

	$req->execute(array(
    'email' => $email,
    'mdp' => $mdp,
    'nom' => $nom,
    'prenom' => $prenom,
    'num_tel' => $num_tel
    ));
}

function addAdmin($email){
	$bdd = dbConnect();

	$req = $bdd->prepare('INSERT INTO ADMIN (email) VALUES (:email)');;

	$req->execute(array(
    'email' => $email
    ));
}

function addBanni($email_ban, $date_fin){
	$bdd = dbConnect();

	$req = $bdd->prepare('INSERT INTO BANNI (email_ban, date_debut, date_fin) VALUES (:email_ban, NOW(), :date_fin)');;

	$req->execute(array(
    'email_ban' => $email_ban,
    'date_fin' => $date_fin
    ));
}

function addAvis($email_receveur, $email_donneur, $note){
	$bdd = dbConnect();

	$req = $bdd->prepare('INSERT INTO AVIS (email_receveur, email_donneur, note, date_avis) 
		VALUES (:email_receveur, :email_donneur, :note, NOW()');

	$req->execute(array(
	'email_receveur' => $email_receveur,
    'email_donneur' => $email_donneur,
    'note' => $note
    ));
}

function getAvis($email)
{
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT AVG(note) FROM AVIS WHERE email_receveur = :email');

	$req->execute(array(
    'email' => $email
    ));

    $note = $req->fetch();

    return $note;
}

function isMember($email){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM MEMBRE WHERE email = :email');

	$req->execute(array(
	    'email' => $email
	));

	$resultat = $req->fetch();

	return $resultat;
}

function updateMember(){

}

function connectMember($email, $pass){
	$bdd = dbConnect();
	// Hachage du mot de passe
	$mdp = $pass;//password_hash($pass, PASSWORD_DEFAULT);
	// Vérification des identifiants
	$req = $bdd->prepare('SELECT * FROM MEMBRE WHERE email = :email AND mdp = :mdp');

	$req->execute(array(
	    'email' => $email,
	    'mdp' => $mdp
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