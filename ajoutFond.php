<?php require_once('inc/init.inc.php'); ?>

<?php require_once("inc/header.inc.php") ?>

<?php 
    if($_POST)
    {
        executeRequete("UPDATE utilisateur SET sold = sold + $_POST[soldAdd] WHERE id_utilisateur = $id_user;");
    }
?>

<main>
<?php var_dump($_SESSION); ?>
<p class="">Votre solde est de : <?php echo($_SESSION["utilisateur"]["sold"])?> €</p>
<form id="formulaire" class="formulaire" action="" method="POST">
    <label for="soldAdd">Ajouter des fonds</label>
    <input type="number" id="soldAdd" name="soldAdd" required="required" min="0" max="99999999">

    <div class="formButtonInsc">
        <a href="inc/ajoutFond.inc.php"><button class="ui button">Ajouter</button></a>
    </div>
</form>
</main>


<?php require_once("inc/footer.inc.php") ?>