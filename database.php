<?php
  require_once 'connect.php';
  try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  }
  catch (PDOException $pe){
    print " Erreur : " . $pe->getMessage() . "<br/>";
    die();
  }
?>