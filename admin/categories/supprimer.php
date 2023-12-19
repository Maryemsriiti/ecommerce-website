<?php
    $idcatgorie = $_GET['idcategorie'];
    include "../../inc/functions.php";
    $conn = connect();
    $requette = "DELETE FROM categories WHERE id='$idcatgorie'";
    $resultat = $conn->query($requette);
    if($resultat){
        //echo "category is deleted";
        header('location:liste.php?delete=ok');
    }
?>