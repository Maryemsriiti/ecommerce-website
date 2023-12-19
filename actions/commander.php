<?php
    include "../inc/functions.php";
    session_start();

    //test user connecter
    if(!isset($_SESSION['nom'])){ //user non connecte
        header('location:../LogIn.php');
        exit();
    }

    $conn = connect();

    $visiteur = $_SESSION['id'];

// //var_dump($_POST);
    $id_produit = $_POST['produit'];
    $quantite = $_POST['quantite'];

// //Selectionner le produit avec leur id

// $conn = connect();

$requette = "SELECT prix,nom FROM produits WHERE id = '$id_produit'   ";
$resultat = $conn->query($requette);
$produit = $resultat->fetch();
$total = $quantite * $produit['prix'];
$date = date("Y-m-d");
if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array($visiteur,0,$date,array());

}
$_SESSION['panier'][1]+=$total;
$_SESSION['panier'][3][] = array($quantite,$total,$date,$date,$id_produit,$produit['nom']);



// //Creation de panier
// $requette_panier = "INSERT INTO panier(visiteur,total,date_creation) VALUES('$visiteur','$total','$date')";
// $resultat = $conn->query($requette_panier);
// $panier_id = $conn->lastInsertId();


// //Ajouter commande
// $requette = "INSERT INTO commandes(quantite,total,panier,date_creation,date_modification,produit) VALUES('$quantite','$total','$panier_id','$date','$date','id_produit')   ";
// $resultat = $conn->query($requette);
header('location:../panier.php')
?>