<?php
/**
 * Created by PhpStorm.
 * User: ferro
 * Date: 16/05/2017
 * Time: 15:01
 */
?>

<!DOCTYPE html
<html>
<head>
    <meta charset="utf-8">
    <title>L'architecture</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="stylesheet" href="css/parution.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<main>
    <header class="menu">
        <img id="logo" src="content/logo_larchitecture%2520copie.svg">
        <a id="hamburger-icon" href="#" class="open-close-btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span></a>
        <nav id="myNav" class="overlay">
            <ul class="overlay-content" >
            <li><a href="index.php">Accueil</a></li>
            <li><a href="parution.php" class="active">Nos revues</a></li>
            <li><a href="#">S'abonner</a></li>
            <li><a href="#">Nos partenaires</a></li>
            <li><a href="formulaire.php">Contact</a></li>
                <li style="margin-top: 50vh"><a href="#" class="footer">Mentions légales</a></li>

            </ul>
        </nav>

            <script src="js/jquery.min.js"></script>
        <script src="js/burger.js"></script>
    </header>
