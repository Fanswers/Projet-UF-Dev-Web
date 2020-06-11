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
    Bonjour <?php echo($_SESSION["utilisateur"]["prenom"])?>
</main>


<?php require_once("inc/footer.inc.php") ?>

