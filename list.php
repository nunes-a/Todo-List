<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
    <style>
      /*.la{width:350px; height: t:100%; background-color: #ccc; margin: 0 auto; padding: 10px;}*/
      div, form {width: 350px; margin: 0 auto; text-align: center;}
      /*input{width: 350px;}*/
    }
    </style>
  </head>
  <body>
    <div>
      <?php 
        session_start();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                echo "Salut,".$_SESSION['us'];
        }
        else
        {
          echo "vous devez vous connecter";
        }
      ?>
    </div>
    <div>
      <?php
        require_once 'database.php';

        // On récupère tout le contenu de la table
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
