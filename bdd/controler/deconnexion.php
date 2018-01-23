<?php
	session_start();
	session_destroy();
	header('location: http://localhost/covoit/index.php');
	exit();