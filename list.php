<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List - project back-end</title>
    <style>
      body{font-family: arial;}
      div, form {width: 350px; margin: 0 auto; text-align: center;}
      input{width: 170px; margin: 0 2px; box-sizing: border-box; text-align: center;}
    </style>
  </head>
  <body>
    <div>
      <?php
        require_once 'database.php';
         
        session_start();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                echo "Bienvenue, ".$_SESSION['us'].". "; ?> <a href="">Déconnecter</a> <?php
        }
        else
        {
          echo "Vous devez vous connecter";
        }
      ?>
    </div>
    <div>
      <?php
        require_once 'database.php';

        $list = $bdd->query('SELECT id_list, nom_list FROM list');

        // On affiche chaque entrée une à une
        while ($resultat = $list->fetch())
        {
        ?>
          <p>
          <strong><?php echo $resultat['id_list']; ?> - </strong><strong>Project</strong> : <?php echo $resultat['nom_list']; ?><br>
          </p>
        <?php
        }
          $list->closeCursor(); // Termine le traitement de la requête
        ?>
    </div>
    <form method="post" action="ajouterprojet.php">
      <input name="nom_list" type="text" placeholder="Nom du projet"><input type="submit" value="Ajouter projet">
    </form>
  </body>
</html>
