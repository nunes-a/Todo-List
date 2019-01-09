<?php

  require_once 'connect.php';
  try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

	$emaillog = isset($_POST['emaillog']) ? $_POST['emaillog'] : '';
	$mdplog = isset($_POST['mdplog']) ? $_POST['mdplog'] : '';
		 
	if (empty($emaillog) || empty($mdplog))
	{
	    echo "Informe email e senha";
	    exit;
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
	    echo "Email ou senha incorretos";
	    exit;
	}
	else{	 
	//$user = $users[0];
	$count==1;	 
	session_start();
	$_SESSION['logged_in'] = true;
	//$_SESSION['user_id'] = $user['id']; ??????????
	//$_SESSION['user_email'] = $emaillog;
	$_SESSION['us'] = $emaillog;

	header ("location: accueil.php");
	//exit();
	}
  }
  catch (PDOException $pe){
    print " Erreur : " . $pe->getMessage() . "<br/>";
    die();
  }

?>