<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List - project back-end</title>
    <style>
      body{font-family: arial;}
      h4{padding: 0; margin: 15px 0 8px 0; font-size: 18px;}
      div, form {width: 350px; margin: 0 auto; text-align: center;}
      input, textarea, select {width: 200px; margin: 2px 0; box-sizing: border-box;}
      textarea {height: 100px;}
    </style>
  </head>
  <body>
    <div>
      <?php 
        require_once 'database.php';

        session_start();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                echo "Bienvenue, ".$_SESSION['us'].". "; ?> <a href="logout.php">Déconnecter</a> <?php
        }
        else
        {
          echo "Vous devez vous connecter";
        }
      ?>
    </div>
    <form method="post" action="ajouteraction.php">
      <h4>Actions</h4>
      <input name="nom_action" type="text" placeholder="Nom"><br>
      <input name="type_action" type="text" placeholder="Type"><br>
      <!--<div>
        <input name="prio_action" type="radio" value="Bas" checked>Bas
        <input name="prio_action" type="radio" value="Moyenne">Moyenne
        <input name="prio_action" type="radio" value="Haute">Haute
      </div>-->
      <select name="cars" placeholder="prio">
        <option value="Bas">Bas</option>
        <option value="Moyenne">Moyenne</option>
        <option value="Élevé">Élevé</option>
      </select><br> 
      <input name="date_action" type="date" placeholder="Date du fin d'action"><br>
      <input name="heure_action" type="time" placeholder="Heure fin d'action"><br>
      <input name="lieu_action" type="text" placeholder="Lieu"><br>
      <textarea name="descp_action" type="textarea" placeholder="Description"></textarea><br>
      <input name="ajt_docm" type="file"><br>
      <input type="submit" value="Ajouter">
    </form>
  </body>
</html>
