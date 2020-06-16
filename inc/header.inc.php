<?php require_once("inc/head.inc.php") ?>

<body>
    <header>
        <div class="banner">
            <p class="logo">Legendary Trip</p>
        </div> 
        <div class="ui menu">
            <a class="item" href="index.php">Acceuil</a>
            <a class="item">Nos destinations de rêve</a>
            <div class="right menu">
            <?php if(!internauteEstConnecte()):?>
                <a class="item" href="connexion.php"><i class="user icon"></i>Se connecter</a>
            <?php endif; ?>
            <?php if(internauteEstConnecte()):?>
                <div class="ui hidden divider"></div>
                <div class="ui floating dropdown button">
                    <div class="text" href="user.php"><?php echo($_SESSION["utilisateur"]["pseudo"])?></div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="user.php"><i class="user icon"></i> Profil</a>
                        <a class="item" href=""><i class="users icon"></i> message</a>
                        <a class="item" href="ajoutFond.php"><i class="euro sign icon"></i><?php echo($_SESSION["utilisateur"]["sold"])?></a>
                        <a href="inc/disconnect.inc.php" class="item">Se déconnecter</a>
                    </div>
                </div>
                <script>
                    $('.dropdown').dropdown({action: 'hide'});
                </script>
            <?php endif; ?>
            </div>
        </div>
    </header>