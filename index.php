<?php
  require_once 'connect.php';
  try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

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

    //$req = null;
    //$bdd = null;

  }
  catch (PDOException $pe){
    print " Erreur : " . $pe->getMessage() . "<br/>";
    die();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
    <style>
      form{width: 350px; margin: 0 auto; text-align: center;}
    </style>
  </head>
  <body>

  <form method="post" action="log.php">
    <h4>Log in</h4>
    <input type="text" name="emaillog" placeholder="Email"><br>
    <input type="password" name="mdplog" placeholder="Mot de passe"><br>
    <input type="submit"value="Log in">
  </form>

    <br>
    <br>

  <form method="post" action="index.php">
    <h4>Inscription</h4>
   <input class="prenom" name="prenom" type="text" placeholder="Prénom"><br>
   <input class="nom" name="nom" type="text" placeholder="Nom"><br>
   <input class="email" name="email" type="email" placeholder="E-mail"><br>
   <input class="mdp" name="mdp" type="password" placeholder="Mot de passe"><br>
   <input class="remdp" name="remdp" type="password" placeholder="Confirmer mot de passe"><br>
	 <input type="submit"value="S'inscrire">
  </form>

<!--
      <script src="../scripts/jquery.js"></script>
      <script src="../scripts/script.js"></script>
-->
  </body>
</html>
