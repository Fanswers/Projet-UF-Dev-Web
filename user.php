<?php require_once('inc/init.inc.php'); ?>

<?php require_once("inc/header.inc.php") ?>

<?php

//-----------------------------------------------------------------
// Affichage (SELECT) :
$result = $mysqli->query("SELECT * FROM utilisateur" );
$membre = $result->fetch_assoc();
//-----------------------------------------------------------------
?>

<main>
    <p class="titlePagePerso">Mes informations</p>
    <p class="descPagePerso">Prénom : <?php echo($_SESSION["utilisateur"]["prenom"])?></p>
    <p class="descPagePerso">Nom : <?php echo($_SESSION["utilisateur"]["nom"])?></p>
    <p class="descPagePerso">Pseudonyme : <?php echo($_SESSION["utilisateur"]["pseudo"])?></p>
    <p class="descPagePerso">Adresse mail : <?php echo($_SESSION["utilisateur"]["email"])?></p>
    <p class="descPagePerso">Numero de téléphone : <?php echo($_SESSION["utilisateur"]["numero"])?></p>
    <p class="descPagePerso">Code postal : <?php echo($_SESSION["utilisateur"]["code_postal"])?></p>
    <p class="descPagePerso">Adresse : <?php echo($_SESSION["utilisateur"]["adresse"])?></p>
    <p class="descPagePerso">Mes biens : </p>
    <div class="buttonPagePerso">
        <a href="index.php"><button class="ui button">Se déconnecter</button></a>
    </div>
</main>


<?php require_once("inc/footer.inc.php") ?>

