<?php $image_path = $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/image/'; ?>
<footer>
	<div class="pied">
		<a href="https://www.facebook.com/OtterLovers">
			<img class="logo" <?php echo 'src="' . $image_path . 'facebook.png' . '"' ?>  alt="FacebookOtter">
		</a>
		<!--Pour toute demande, nous contactez sur les reseaux sociaux-->
		<a <?php echo 'href="' . $view_http . 'faq.php' . '"'?>>
			<img class="logo" <?php echo 'src="' . $image_path . 'faq.png' . '"' ?>  alt="faq">
		</a>
		<!--Notre mail: OtterCoivot@gmail.com-->
		<a href="https://twitter.com/CutestOtters">
			<img class="logo" <?php echo 'src="' . $image_path . 'twitter.png' . '"' ?>  alt="TwittOtter">
		</a>
	</div>
</footer>