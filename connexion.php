<?php include_once("inc/head.inc.php") ?>

<main>
    <p class="footitle">Connectez-vous<p>
    <form class="formulaire" action="index.php" method="GET">
            <label>Pseudonyme</label>
            <input type="text">
            <label>Mot de passe</label>
            <input type="text">
            <div class="formButtonCo">
                <button class="ui button" type="submit">Se connecter</button>
            </div>
    </form>
    <div class="formButtonInsc">
            <a href="inscription.php"><button class="ui button">Pas de compte ?</button></a>
        </div>
</main>

<?php include_once("inc/footer.inc.php") ?>