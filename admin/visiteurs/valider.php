<?php
$idvisiteur = $_GET['id'];
include "../../inc/functions.php";
$conn = connect();
$requette = "UPDATE visiteurs SET etat=1 WHERE id='$idvisiteur'";
$resultat = $conn->query($requette);

if($resultat){
    header('location:liste.php?valider=ok');
}else{
    echo "Erreur de validation";
}
?>