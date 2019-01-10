<?php
	require_once 'database.php';

	session_start();
	session_destroy(); 
	echo "<script type='text/javascript'>alert('Vous êtes déconnecter'); window.location='index.php';</script>";
?>
