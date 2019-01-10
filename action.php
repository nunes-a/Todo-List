<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO LIST</title>
  	<!--<link rel="stylesheet" href="../styles/style.css">-->
    <style>
      /*.la{width:350px; height: t:100%; background-color: #ccc; margin: 0 auto; padding: 10px;}*/
      form {width: 350px; margin: 0 auto; text-align: center;}
      /*input{width: 350px;}*/
    }
    </style>
  </head>
  <body>

  <form method="post" action="ajouteraction.php">
    <h4>Tâche</h4>
    <input name="nomaction" type="text" placeholder="Nom de tâche"><br>
    <input name="type_action" type="text" placeholder="Type de tâche"><br>
    <!--<div>
      <input name="prio_action" type="radio" value="Bas" checked>Bas
      <input name="prio_action" type="radio" value="Moyenne">Moyenne
      <input name="prio_action" type="radio" value="Haute">Haute<br>
    </div>-->
    <input name="date_action" type="date" placeholder="Date"><br>
    <input name="heure_action" type="time" placeholder="Heure"><br>
    <input name="lieu_action" type="text" placeholder="Lieu"><br>
    <textarea name="descp_action" type="textarea" placeholder="Description"></textarea><br>
    <input name="ajt_docm" type="text" placeholder="Ajoute document"><br>
    <input type="submit" value="Ajouter">
  </form>


<!--
      <script src="../scripts/jquery.js"></script>
      <script src="../scripts/script.js"></script>
-->
  </body>
</html>
