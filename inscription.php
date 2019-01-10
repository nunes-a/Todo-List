<?php
    require_once 'database.php';

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

    echo "<script type='text/javascript'>alert('Vous êtes inscrit'); window.location='list.php';</script>";
?>