<?php include_once("inc/head.inc.php") ?>

<body>
    <header>
        <p class="logo">LT</p>
        <div class="ui menu">
            <a class="item" href="index.php">Acceuil</a>
            <a class="item">Nos destinations de rêve</a>
            <div class="right menu">
            <?php if(!internauteEstConnecte()):?>
                <a class="item" href="connexion.php"><i class="user icon"></i>Se connecter</a>
            <?php endif; ?>
            <?php if(internauteEstConnecte()):?>
                <a class="item" href="user.php"><i class="user icon"></i><?php echo($_SESSION["utilisateur"]["pseudo"])?></a>
            <?php endif; ?>
            </div>
        </div>
    </header>