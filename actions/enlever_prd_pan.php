<?php
session_start();
$id = $_GET['id'];
//var_dump($_SESSION['panier'][3]);
$total_enlever = $_SESSION['panier'][3][$id][1];
$_SESSION['panier'][1] -= $total_enlever;
$total_enlever = $_SESSION['panier'][3][$id][1];
unset($_SESSION['panier'][3][$id]);
//var_dump($_SESSION['panier'][3]);
header("location:../panier.php")
?>