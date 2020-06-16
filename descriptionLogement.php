<?php require_once('inc/init.inc.php'); ?>
<?php require_once("inc/header.inc.php") ?>
<?php
    if(!empty($_GET['id'])) {
        $plus = $_GET['id'];
        $enSavoirPlus = executeRequete("SELECT * FROM logement WHERE id_logement LIKE $plus");
    }
        while ($ligne = $enSavoirPlus->fetch_object())
            {
                ?>
                <div class=descLogement>
                    <div class="descLogementImg">
                        <img src="img/<?php echo $ligne->image ?>" class="descImg">
                    </div>
                    <div>
                        <p class="descTitle"><?php echo $ligne->logement_type ?><p>
                        <div class="meta">
                            <p class="descriptionLogement"><?php echo $ligne->image_text ?></p>
                        </div>
                    </div>
                    <div class="personnePrix">
                        <a>
                        <i class="users icon"></i>
                        <?php echo $ligne->total_occupant ?> Personnes ------------------------------------------------ <?php echo $ligne->prix?> euros/nuit
                        </a>
                    </div>
                    </div>
                </div>
            <?php } ?>

<?php require_once("inc/footer.inc.php") ?>