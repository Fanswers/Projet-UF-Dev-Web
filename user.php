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
    <p class="descPagePerso">Mes biens : </p>
</main>


<?php require_once("inc/footer.inc.php") ?>

