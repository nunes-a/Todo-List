<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
  </head>
  <body>

  	<?php


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
        include 'form.php';

    }



  		require_once 'connectE.php';
  		try {
  			$bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  			echo "Connected to $dbname at $host successfully.";
  			//$conn = null;
  			// $sql = 'SELECT prenom, nom, email, mdp FROM users ORDER BY id';
  			// $q = $conn->query($sql);
  			// $q->setFetchMode(PDO::FETCH_ASSOC);


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
  			echo('Vous êtes inscrit!');

  			$req = null;
  			$bdd = null;

  		}
  		catch (PDOException $pe){
  			print " Erreur : " . $pe->getMessage() . "<br/>";
  			die();

  			//die ("Could not connect to the database $dbname : ". $pe->getMessage());
  		}
  	?>


<!--   	<tbody>
  		<?php
  			while ($row = $q->fetch()) :
  		?>
  		<div>
	  		<?php echo htmlspecialchars($row['prenom']); ?><br>
	  		<?php echo htmlspecialchars($row['nom']); ?><br>
	  		<?php echo htmlspecialchars($row['email']); ?><br>
	  		<?php echo htmlspecialchars($row['mdp']); ?><br>
	  		<?php endwhile; ?>
  		</div>
  	</tbody> -->




<!--   	<br>
  	<form method="post">
    <input type="text" name="email" placeholder="Identifiant">
    <input type="password" name="mdp" placeholder="Mot de passe">
    <button><a href="#">Se Connecter</a></button>
	</form> -->
    <br>
    <br>

<form method="post" action="index.php">
    <input class="prenom" name="prenom" type="text" placeholder="Prénom">
    <input class="nom" name="nom" type="text" placeholder="Nom">
    <input class="email" name="email" type="email" placeholder="E-mail">
    <input class="mdp" name="mdp" type="password" placeholder="Mot de passe">
    <input class="remdp" name="remdp" type="password" placeholder="Confirmer mot de passe">
  <input type="submit"value="S'inscrire">
</form>


      <script src="../scripts/jquery.js"></script>
      <script src="../scripts/script.js"></script>

  </body>
</html>