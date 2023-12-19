<?php

function connect(){
    // Connection vers la base de donnee
    $servername = "localhost";
    $DBuser = "root";
    $DBpassword = "";
    $DBname = "e-commerce";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully";
    }
    catch(PDOException $e){
        echo "Connection failed:".$e->getMessage();
 
    }
    return $conn;
}


    function getAllCategories(){
   $conn = connect();

    //creation de la requette
    $requette  = "SELECT * FROM categories";

    //execution de la requette
    $resultat = $conn->query($requette);

    //resultat de la requette
    $categories = $resultat->fetchAll();
  //  var_dump($categories);

    return $categories;
}

function getAllProducts(){
    $conn = connect();


    //creation de la requette
    $requette  = "SELECT * FROM produits";

    //execution de la requette
    $resultat = $conn->query($requette);

    //resultat de la requette
    $produits = $resultat->fetchAll();
  //  var_dump($categories);

    return $produits;
}


function searchProduits($keyword){
    $conn = connect();


    //creation de la requette
    $requette  = "SELECT * FROM produits WHERE nom like '%$keyword%'";

    //execution de la requette
    $resultat = $conn->query($requette);

    //resultat de la requette
    $produits = $resultat->fetchAll();
    return $produits;
}


function getProduitById($id){
    $conn = connect();


    //creation de la requette
    $requette  = "SELECT * FROM produits WHERE id=$id";

    //execution de la requette
    $resultat = $conn->query($requette);

    //resultat de la requette
    $produit = $resultat->fetch();
  //  var_dump($categories);

    return $produit;
}

function AddVisiteur($data){
    $conn = connect();
    $requette = "INSERT INTO visiteurs(email, nom, tele, mp) VALUES ('" . $data['email'] . "','" . $data['nom'] . "','" . $data['tele'] . "','" . $data['mp'] . "')";

    //execution de la requette
    $resultat = $conn->query($requette);

    if($resultat){
    return true;
    }else{
        return false;
    }
}

function ConnectVisiteur($data){
    $conn = connect();
    $email = $data['email'];
    $mp = $data['mp'];
    $requette = "SELECT * FROM visiteurs WHERE email='$email' AND mp='$mp'";
    $resultat = $conn->query($requette);
    $user = $resultat->fetch();
    return $user;
}

function ConnectAdmin($data){
    $conn = connect();
    $email = $data['email'];
    $mp = $data['mp'];
    $requette = "SELECT * FROM administrateur WHERE email='$email' AND mp='$mp'";
    $resultat = $conn->query($requette);
    $user = $resultat->fetch();
    return $user;
}


function GetAllUsers(){
    $conn = connect();
    $requette = "SELECT * FROM visiteurs WHERE etat=0";
    $resultat = $conn->query($requette);
    $users = $resultat->fetchAll();
    return $users;

}


function getStock(){
    $conn = connect();
    $requette = "SELECT s.id,p.nom,s.quantite FROM produits p,stock s WHERE p.id = s.produit";
    $resultat = $conn->query($requette);
    $stock = $resultat->fetchAll();
    return $stock;
}

?>