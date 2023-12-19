<?php
    session_start();
    // recuperer les donnees
    $id = $_POST['id'];
    $quantite = $_POST['quantite'];
    $date_modification = date("Y-m-d");
    // connexion
    include "../../inc/functions.php";
    $conn = connect();

    //requette d'execution
    $requette = "UPDATE  stock SET quantite='$quantite',date_modification='$date_modification' WHERE id='$id'";

    $resultat = $conn->query($requette);
    if($resultat){
        header('location:liste.php?modif=ok');
    }

?>