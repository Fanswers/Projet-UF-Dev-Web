<?php include_once("inc/head.inc.php") ?>

<main>
    <p class="footitle">Inscrivez-vous<p>
    <form class="formulaire" action="index.php" method="POST">
            <label>Nom</label>
            <input type="text">
            <label>Prénom</label>
            <input type="text">
            <label>Pseudonyme</label>
            <input type="text">
            <label>Adresse mail</label>
            <input type="text">
            <label>Mot de passe</label>
            <input type="text">
            <label>Confirmation mot de passe</label>
            <input type="text">
            <div class="formButtonCo">
                <button class="ui button" type="submit">Créer</button>
            </div>
    </form>
</main>


<?php include_once("inc/footer.inc.php") ?>