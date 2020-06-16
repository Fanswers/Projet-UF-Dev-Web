<?php require_once("inc/init.inc.php") ?>
<?php require_once("inc/header.inc.php") ?>

<main>
    <?php
    if(!empty($_GET['id'])) {
        $plus = $_GET['id'];
        $resultat = executeRequete("SELECT * FROM reservation WHERE id_utilisateur LIKE $plus");
    }
        while ($ligne = $resultat->fetch_object())
            {
                ?>
                <div class=descLogement>
                    <div>
                        <p class="descDateDebut"><?php echo $ligne->date_debut ?><p>
                        <p class="descDateFin"><?php echo $ligne->date_fin ?><p>
                    </div>
                    </div>
                </div>
            <?php } ?>
</main>

<?php require_once("inc/footer.inc.php") ?>