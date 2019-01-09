<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
    <style>
      /*.la{width:350px; height:100%; background-color: #ccc; margin: 0 auto; padding: 10px;}*/
      form{width: 350px; margin: 0 auto; text-align: center;}
    }
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

  <form method="post" action="inscription.php">
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
