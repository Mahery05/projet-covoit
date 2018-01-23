<?php
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/include/path.php';


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
						AND CAST(date_dep AS date) = :date_dep');

	$req->execute(array(
	    'ville_dep' => $ville_dep,
	    'ville_ar' => $ville_ar,
		'date_dep' => $date_dep
	));

	return $req;
}



function addTrajetType($ville_dep, $ville_ar, $distance, $temps_moyen){
	$bdd = dbConnect();

	$req = $bdd->prepare('INSERT INTO TRAJET_TYPE
	(ville_dep, ville_ar, distance, temps_moyen) 
	VALUES 
	(UPPER(:ville_dep),  UPPER(:ville_ar), :distance, :temps_moyen)');

	$req->execute(array(
    'ville_dep' => $ville_dep,
    'ville_ar' => $ville_ar,
    'distance' => $distance,
    'temps_moyen' => $temps_moyen
    ));
}

function getTrajetsType(){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM TRAJET_TYPE');

	$req->execute();

	return $req;
}

function isTrajetType($ville_dep, $ville_ar){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM TRAJET_TYPE WHERE ville_dep = :ville_dep AND ville_ar = :ville_ar');

	$req->execute(array(
    'ville_dep' => $ville_dep,
    'ville_ar' => $ville_ar
    ));

    $resultat = $req->fetch();

	return $resultat;
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

function getMembers(){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM MEMBRE');

	$req->execute();

	return $req;
}

function deleteMember($email){
	$bdd = dbConnect();

	$req = $bdd->prepare('DELETE FROM MEMBRE WHERE email = :email');

	$req->execute(array(
    'email' => $email
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

	$req = $bdd->prepare('SELECT AVG(note) AS moyenne FROM AVIS WHERE email_receveur = :email');

	$req->execute(array(
    'email' => $email
    ));

    $note = $req->fetch();

    return $note['moyenne'];
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

function isAdmin($email){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM ADMIN WHERE email_admin = :email');

	$req->execute(array(
	    'email' => $email
	));

	$resultat = $req->fetch();

	return $resultat;
}

function isBanni($email){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM BANNI WHERE email_ban = :email');

	$req->execute(array(
	    'email' => $email
	));

	$resultat = $req->fetch();

	return $resultat;
}

function connectMember($email, $pass){
	$bdd = dbConnect();
	// Hachage du mot de passe
	$mdp = $pass; //password_hash($pass, PASSWORD_DEFAULT);
	// Vérification des identifiants
	$req = $bdd->prepare('SELECT * FROM MEMBRE WHERE email = :email AND mdp = :mdp');

	$req->execute(array(
	    'email' => $email,
	    'mdp' => $mdp
	));

	$resultat = $req->fetch();

	return $resultat;
}

////////////////////////////////////////// AFFICHAGE

function printTrajetType($trajet){

	echo '<table width="50%"  border-colapse>';
	echo '<tr>';

	echo '<th>' . $trajet['ville_dep'] . ' => ' . $trajet['ville_ar'] . '</th>';

	echo '<th>' . 'Distance: ' . $trajet['distance'] . 'km'. '</th>';
	
	echo '<th>' . 'Temps moyen: ' . $trajet['distance'] . '</th>';

	echo '</tr>';
	echo '</table>';
}

function printTrajet($trajet){

	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM MEMBRE WHERE email = :email');

	$req->execute(array(
    'email' => $trajet['email_conducteur']
    ));

    $membre = $req->fetch();

	echo '<table width="50%"  border-colapse>';
	echo '<tr>';

	echo '<th>' . $membre['prenom'] . ' ' . $membre['nom'] . '<br/>' . $membre['num_tel'] . '<br/>' . '</th>';

	echo '<th>' . $trajet['ville_dep'] . ' => ' . $trajet['ville_ar'] . '<br/>' . $trajet['adresse_dep'] . ' => ' . $trajet['adresse_ar'] . '<br/>' . '</th>';

	echo '<th>' . 'Prix: ' . $trajet['prix'] . '€'. '<br/>' . 'Places: ' . $trajet['nb_places'] . '/' . $trajet['nb_places'] . '<br/>' . '</th>';

	echo '</tr>';
	echo '</table>';
}

function printMembre($membre){

	$avis = getAvis($membre['email']);
	$admin = isAdmin($membre['email']);

	$statut = 'Membre';

	if($admin){
		$statut = 'Admin';
	}

	$controler_http = '../controler/';

	$supprimer = '<form method="post" cible="'.$controler_http.'gererCompte.php'.'">
					<input type="hidden" name="email" value="'.$membre['email'].'">
					<input type="submit" name="submit" value="Supprimer">
				</form>';

	echo '<table width="50%"  border-colapse>';
	echo '<tr>';

	echo '<th>' . $membre['prenom'] . ' ' . $membre['nom'] . '</th>';

	echo '<th>' . $membre['email'] . '</th>';

	echo '<th>' . $membre['num_tel'] . '</th>';

	echo '<th>' . $statut . '</th>';

	echo '<th>' . $avis . '</th>';
	echo '<th>' . $supprimer . '</th>';

	echo '</tr>';
	echo '</table>';
}



