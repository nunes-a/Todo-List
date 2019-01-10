<?php
    require_once 'database.php';

    $req = $bdd->prepare('INSERT INTO list (nom_list, id_actions) VALUES (:nom_list, :id_actions)');

    $nomlist = $_POST['nom_list'];

    $req->execute(array('nom_list'=>$nomlist,
                        'id_actions'=>4
                        ));

    echo "<script type='text/javascript'>alert('Vous avez ajouter un nouveau projet'); window.location='action.php';</script>";
?>