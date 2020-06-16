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
                        <img src="img/VacancesLuxe.jpg" class="descImg">
                    </div>
                    <div>
                        <p class="descTitle"><?php echo $ligne->logement_type ?><p>
                        <div class="meta">
                        <p class="descriptionLogement">Logement spacieux possédant <?php echo $ligne->total_chambre ?> chambres avec lits doubles, <?php echo $ligne->total_toilette ?> salles de bain, <?php echo $ligne->total_toilette?> toilettes et d'une cuisine tout équipée. La climatisation est installé dans toutes les pièces de la maison. Accès a internet très haut débit avec la fibre. </p>
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