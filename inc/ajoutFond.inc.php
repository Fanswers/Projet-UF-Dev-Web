ah ouiiiiiiiiiiiii
<?php 
    session_destroy();
    unset($_SESSION['pseudo']);
    session_start();
    header("Location: http://localhost/php/Projet-UF-Dev-Web/ajoutFond.php");
?>