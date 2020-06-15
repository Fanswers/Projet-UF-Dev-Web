<?php require_once("inc/init.inc.php") ?>

<?php require_once("inc/header.inc.php") ?>

<main>
    <div class=carteLogementTotal>
        <?php
            $resultat = executeRequete("SELECT * FROM logement WHERE proprietaire_id LIKE $id_user");


            

            //Afficher valeur des colonnes
            while ($ligne = $resultat->fetch_object())
            {
                ?>
                <div class=carteLogement>
                    <div class="ui card">
                    <div class="ui slide masked reveal image">
                        <img src="/images/avatar/large/jenny.jpg" class="visible content">
                        <img src="/images/avatar/large/elliot.jpg" class="hidden content">
                    </div>
                    <div class="content">
                        <a class="header"> <?php echo $ligne->logement_type ?></a>
                        <div class="meta">
                        <span class="date">Logement possédant <?php echo $ligne->total_chambre ?> chambres, <?php echo $ligne->total_toilette ?> toilettes, <?php echo $ligne->total_toilette?> salles de bain et d'une cuisine tout équipée. </span>
                        </div>
                    </div>
                    <div class="extra content">
                        <a>
                        <i class="users icon"></i>
                        <?php echo $ligne->total_occupant ?> Personnes ------------------ <?php echo $ligne->prix?> euros
                        </a>
                    </div>
                    </div>
                </div>
                <?php
                
            }
        ?>
    </div>

    <div>
        <a href="nouveauLogement.php"><button class="ui button">Ajouter un logement</button></a>
    </div>
</main>

<?php require_once("inc/footer.inc.php") ?>