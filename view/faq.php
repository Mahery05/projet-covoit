<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/include/path.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php 
	$head_title = 'OtterCovoit | F.A.Q'; 
	include $include_path . 'head.php'; 
?>

<body id="body1">

	<!-- Nav-Bar Up ! -->
	<?php include $include_path . 'navbar.php'; ?>

	<!-- Liste Questions/Réponses de la F.A.Q -->    
	<div class="container" id="containerMain">
		<div class="pad" >	
			
			<h1 class="titre_interne" style="text-decoration: underline;">Questions fr&eacute;quentes :</h1>

			<div class="texte">
				<h3><span style="font-size:14px;"><strong style="font-size: 17px;">Attendez, c'est vraiment gratuit ?</strong></span></h3>

				<p>Totalement gratuit ! Aucune commission n’est prélevée et aucune publicité n'est délivré à nos utilisateurs. Le seul coût de votre trajet consiste dans l’indemnisation du conducteur. Ce site est le fruit de la collaboration entre deux étudiants fan de loutres et non d'argent.</p>
			</div>
			<div class="texte">
				<h3><strong style="font-size: 17px;">Faut-il une assurance particulière pour pratiquer le covoiturage ?</strong></h3>

				<p>Les covoitureurs sont assurés par l’assurance R.C (responsabilité civile) du chauffeur qui couvre les dégâts corporels et matériels des passagers.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Le prix du trajet</strong></h3>

				<p>Le prix varie en fonction de la distance parcou avec une moyenne de 0,10€ par kilomètre.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Comment le conducteur est-il indemnisé ?</strong></h3>

				<p>Les paiements s’effectuent de la main à la main.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Je suis mineur, puis-je utiliser le service OtterCovoit ?</strong></h3>

				<p>Oui, absolument tant que vos tuteur vous accompagnent !</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Pourquoi renseigner les références de mon véhicule quand je suis conducteur ?</strong></h3>

				<p>Les références d'un' véhicule (marque, modèle, couleur) permettront aux utilisateurs de vous retrouver plus facilement sur le lieu de rendez-vous. En outre un profil bien renseigné crée de la confiance pour ceux qui ne vous connaissent pas et souhaitent covoiturer avec vous.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Quels navigateurs sont compatibles avec RoulezMalin</strong></h3>

				<p>Tous ! </p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Comment puis-je modifier mon mot de passe ?</strong></h3>

				<p>Vous ne pouvez pas !(Pour l'instant !)</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">J&#39;ai perdu mon mot de passe. Que faire ?</strong></h3>

				<p>Envoyez nous un mail, nous vous le renverron en réponse à celui-ci.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Je souhaite me désinscrire, comment faire ?</strong></h3>

				<p>Je me connecte sur le site internet et je me rends dans la rubrique «Mon compte». Un lien en bas de page permet de demander une désinscription mais attention celle-ci est définitive.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Ai-je le droit de refuser un covoiturage ?</strong></h3>

				<p>J'ai le droit de refuser un contact sans donner de raison ou de ne pas répondre. Le mieux est tout de même de donner une réponse, même négative, dès que possible pour que votre interlocuteur n’attende pas une réponse positive pour rien.</p>
			</div>

			<div class="texte">
				<h3><strong style="font-size: 17px;">Et si mon covoitureur ne vient pas ?</strong></h3>

				<p>Evitez les imprévus en contactant directement votre covoitureur ! Nous vous conseillons de l’appeler pour confirmer la date, le lieu et l’horaire du rendez-vous.</p>
			</div>
			<div class="texte">
				<h3><strong style="font-size: 17px;">Comment vous contacter ?</strong></h3>

				<p>Vous pouvez nous contacter sur les réseaux sociaux ou par mail ! Cliquez <a href="Index.php">> ici <</a> et voir en bas de la page !</p>
			</div>

		</div>
	</div>

	<?php include $include_path . 'footer.php'; ?>

</body>
</html>
