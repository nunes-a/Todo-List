<?php
	require_once 'database.php';

	$emaillog = isset($_POST['emaillog']) ? $_POST['emaillog'] : '';
	$mdplog = isset($_POST['mdplog']) ? $_POST['mdplog'] : '';

	//$utilizateur = $bdd->query("SELECT prenom FROM users");	

	if (empty($emaillog) || empty($mdplog))
	{
	    echo "<script type='text/javascript'>alert('Informer votre email et/ou mot de passe'); window.location='index.php';</script>";
	}
		 
	//$mdpHash = make_hash($mdplog);
	//$mdpHash = $mdplog;
		 
	$stmt = $bdd->prepare("SELECT email, mdp FROM users WHERE email = :emaillog AND mdp = :mdplog");
	$stmt->bindParam(':emaillog', $emaillog);
	$stmt->bindParam(':mdplog', $mdplog);
	$stmt->execute();
		 
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 
	if (count($users) <= 0)
	{
	    echo "<script type='text/javascript'>alert('Email ou mot de passe incorrects'); window.location='index.php';</script>";
	}
	else
	{	 
		//$user = $users[0];
		$count==1;	 
		session_start();
		$_SESSION['logged_in'] = true;
		//$_SESSION['user_id'] = $user['id']; ??????????
		//$_SESSION['user_email'] = $emaillog;
		$_SESSION['us'] = $emaillog;

		//$_SESSION['us'] = $utilizateur;

		header ("location: list.php");
	}
?>