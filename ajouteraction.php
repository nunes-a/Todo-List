<?php
    require_once 'database.php';

    $req = $bdd->prepare('INSERT INTO actions (nom_action, type_action, prio_action, date_action, heure_action, lieu_action, descp_action, ajt_docm) VALUES (:nom_action, :type_action, :prio_action, :date_action, :heure_action; :lieu_action, :descp_action, :ajt_docm)');

        $nomaction = $_POST['nom_action'];
    $typeaction = $_POST['type_action'];
    $prioaction = $_POST['prio_action'];
    $dateaction = $_POST['date_action'];
    $heureaction = $_POST['heure_action'];
    $lieuaction = $_POST['lieu_action'];
    $descpaction = $_POST['descp_action'];
    $ajtdocm = $_POST['ajt_docm'];



    $req->execute(array('nom_action'=>$nomaction,
                        'type_action'=>$typeaction,
                        'prio_action'=>$prioaction,
                        'date_action'=>$dateaction,
                        'heure_action'=>$heureaction,
                        'lieu_action'=>$lieuaction,
                        'descp_action'=>$descpaction,
                        'ajt_docm'=>$ajtdocm
                        ));

    //header ("Refresh:1; url: index.php");
    //$message = 'Vous êtes inscrit';
    //echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    echo "<script type='text/javascript'>alert('Vous avez ajouter un nouveau action'); window.location='accueil.php';</script>";
?>