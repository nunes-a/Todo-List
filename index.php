<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List - project back-end</title>
    <style>
      h4{font-family: arial; padding: 0; margin: 0 0 8px 0; font-size: 18px;}
      form{width: 350px; margin: 0 auto; text-align: center;}
      input{width: 200px; margin: 2px 0; box-sizing: border-box;}
    </style>
  </head>
  <body>
    <form method="post" action="log.php">
      <h4>Connexion</h4>
      <input name="emaillog" type="text" placeholder="Email"><br>
      <input name="mdplog" type="password" placeholder="Mot de passe"><br>
      <input class="bt" type="submit" value="Connecter">
    </form>

    <br>
    <br>

    <form method="post" action="inscription.php">
      <h4>Inscription</h4>
      <input name="prenom" type="text" placeholder="Prénom"><br>
      <input name="nom" type="text" placeholder="Nom"><br>
      <input name="email" type="email" placeholder="E-mail"><br>
      <input name="mdp" type="password" placeholder="Mot de passe"><br>
      <input name="remdp" type="password" placeholder="Confirmer mot de passe"><br>
  	  <input class="bt" type="submit" value="S'inscrire">
    </form>
  </body>
</html>
