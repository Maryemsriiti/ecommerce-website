<?php
    session_start();
    // recuperer les donnees
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $date_modification = date("Y-m-d");
    // connexion
    include "../../inc/functions.php";
    $conn = connect();

    //requette d'execution
    $requette = "UPDATE  categories SET nom='$nom',description='$description',date_modification='$date_modification' WHERE id='$id' ";

    $resultat = $conn->query($requette);
    if($resultat){
        header('location:liste.php?modif=ok');
    }

?>