<?php 
//ajout des variables path
include $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
?>
<!-- Nav-Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		
		<!-- Input Left-Nav-Bar -->
		<div class="navbar-header">
			<a class="navbar-brand"<?php echo 'href="' . $index_http . '"'?>>OtterCovoit</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a <?php echo 'href="' . $index_http . '"'?>>Accueil</a></li>
		</ul>

		<!-- Input Righ-Nav-Bar -->
		<ul class="nav navbar-nav navbar-right">
			<li><a <?php echo 'href="' . $controler_http . 'proposerTrajet.php' . '"'?> >
				<span class="glyphicon glyphicon-plus-sign"></span> Proposition-Trajet
				</a>
			</li>

		<?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])) : ?>

			<li>
				<span class="glyphicon glyphicon-user"></span> 
				<?php include_once 'menu.php'; ?>
			</li>

		<?php else : ?>

			<li>
				<a <?php echo 'href="' . $controler_http . 'connexion.php' . '"'?>>
					<span class="glyphicon glyphicon-user"></span> Connexion
				</a>
			</li>

			<li>
				<a <?php echo 'href="' . $controler_http . 'inscription.php' . '"'?>>
					<span class="glyphicon glyphicon-log-in"></span> S'inscrire
				</a>
			</li>

		<?php endif; ?>
		</ul>
	</div>
</nav>