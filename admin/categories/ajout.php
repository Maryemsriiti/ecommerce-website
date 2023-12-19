<?php
    session_start();
    // recuperer les donnees
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $createur = $_SESSION['id'];
    $date_creation = date("Y-m-d");
    // connexion
    include "../../inc/functions.php";
    $conn = connect();

    try{
    //requette d'execution
    $requette = "INSERT INTO categories(nom,description,createur,date_creation) VALUES ('$nom','$description','$createur','$date_creation')";

    $resultat = $conn->query($requette);
    if($resultat){
        header('location:liste.php?ajout=ok');
    }
    }
    catch(PDOException $e){
        //echo "Connection failed:".$e->getMessage();
         if($e->getcode()==23000){
            header('location:liste.php?erreur=duplicate');
        }
    }

?>