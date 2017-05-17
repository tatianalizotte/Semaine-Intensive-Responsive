<?php
/**
 * Created by PhpStorm.
 * User: ferro
 * Date: 16/05/2017
 * Time: 15:00
 */?>

<?php include 'header.php';?>


<main class="contact">
    <div class="contactg">
        <h1>Contact</h1>
        <p>Pour nous contacter, veuillez utiliser le formulaire ci-dessous.Merci de renseigner tous les champs.</p>
        <form method="post" action="traitement.php">
            <br>

                <label for="raison">RAISON SOCIALE : </label>
                <input type="text" name="raison" id="raison" /><br>

                <label for="nom">NOM :</label>
                <input type="text" name="nom" id="nom" /><br>

                <label for="telephone">TELEPHONE :</label>
                <input type="number" name="telephone" id="telephone" /><br>

                <label for="email">EMAIL :</label>
                <input type="email" name="email" id="email" /><br>

            <label for="service">SERVICE :</label>
                <input type="text" name="service" id="service" /> <br>

            <label for="message">MESSAGE :</label>
            <textarea name="message" rows="10" cols="30">
                Saisir un message.
            </textarea>
    </div>
    <div class="texted">
        <img src="https://placehold.it/500x500" alt="">
        <p>Depuis 1990, la revue << L'Architecture de votre region >> propose un panorama détaillé de l'architecture d'une régio, d'un territoire ou d'un pays.
            <br><br>
        Les sondages réalisés attestent de sa durée de vieet par son aspect référention, de sa fréquente consultation.</p>
    </div>
</main>
