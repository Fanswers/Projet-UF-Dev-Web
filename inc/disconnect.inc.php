<?php require_once("init.inc.php"); ?>

<?php 
    session_destroy();
    unset($_SESSION['pseudo']);
    header("Location: http://localhost/php/Projet-UF-Dev-Web/index.php");
?>