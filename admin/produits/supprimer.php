<?php
    $idproduit = $_GET['idproduit'];
    include "../../inc/functions.php";
    $conn = connect();
    $requette = "DELETE FROM produits WHERE id='$idproduit'";
    $resultat = $conn->query($requette);
    if($resultat){
        //echo "product is deleted";
        header('location:liste.php?delete=ok');
    }
?>