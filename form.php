	<?php

/*
    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['remdp']))
    {
        echo 'hello '.$_POST['prenom'].'</br>';
        echo $_POST['nom'].'</br>';
        echo $_POST['email'].'</br>';
        echo $_POST['mdp'].'</br>';
        echo $_POST['remdp'].'</br>';
        // echo print_r($_POST);
    }
    
    else
    {
        echo'Erreur : veuillez remplir tous les champs';
        include 'index.php';

    }

*/

  		require_once 'connect.php';
  		try {
  			$bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  			//echo "Connected to $dbname at $host successfully.";
  			//$conn = null;

  		$req = $bdd->prepare('INSERT INTO users (prenom, nom, email, mdp) VALUES (:prenom, :nom, :email, :mdp)');

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

  		$req->execute(array('prenom'=>$prenom,
  							'nom'=>$nom,
                            'email'=>$email,
  						    'mdp'=>$mdp,
  							));
        $message = 'Vous êtes inscrit';
  		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

  		$req = null;
  		$bdd = null;

  		}
  		catch (PDOException $pe){
  			print " Erreur : " . $pe->getMessage() . "<br/>";
  			die();

  			//die ("Could not connect to the database $dbname : ". $pe->getMessage());
  		}
  	?>
