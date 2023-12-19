<?php
    session_start();
    // recuperer les donnees
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $categorie = $_POST['categorie'];
    //Upload Image
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image=$_FILES["image"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $date_modification = date("Y-m-d");
    // connexion
    include "../../inc/functions.php";
    $conn = connect();

    //requette d'execution
    $requette = "UPDATE  produits SET nom='$nom',description='$description',prix='$prix',image='$image',date_modification='$date_modification' WHERE id='$id'";

    $resultat = $conn->query($requette);
    if($resultat){
        header('location:liste.php?modif=ok');
    }

?>