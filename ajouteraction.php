<?php
    require_once 'database.php';

    //$req = $bdd->prepare('INSERT INTO actions (nom_action, type_action, prio_action, date_action, heure_action, lieu_action, descp_action, ajt_docm) VALUES (:nom_action, :type_action, :prio_action, :date_action, :heure_action, :lieu_action, :descp_action, :ajt_docm)');

    //$requeteSQL = $bdd->query('SELECT nom_action FROM actions');
    //$data = $req->fetch();


    $req = $bdd->prepare('INSERT INTO actions (nom_action) VALUES (:nomaction)');

    //$q = $bdd->query($req);
    //$q->setFetchMode(PDO::FETCH_ASSOC);

    $nomaction = $_POST['nomaction'];
    //$typeaction = $_POST['type_action'];
    //$prioaction = $_POST['prio_action'];
    //$dateaction = $_POST['date_action'];
    //$heureaction = $_POST['heure_action'];
    //$lieuaction = $_POST['lieu_action'];
    //$descpaction = $_POST['descp_action'];
    //$ajtdocm = $_POST['ajt_docm'];



    $req->execute(array('nomaction'=>$nomaction
                        //'type_action'=>$typeaction,
                        //'prio_action'=>$prioaction,
                        //'date_action'=>$dateaction,
                        //'heure_action'=>$heureaction,
                        //'lieu_action'=>$lieuaction,
                        //'descp_action'=>$descpaction,
                        //'ajt_docm'=>$ajtdocm,
                        ));

    echo '<pre>'.print_r($req,true).'</pre>';
    //echo $requeteSQL;
    //  echo $q;

    //header ("Refresh:1; url: index.php");
    //$message = 'Vous êtes inscrit';
    //echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    echo "<script type='text/javascript'>alert('Vous avez ajouter un nouveau action'); window.location='action.php';</script>";
?>