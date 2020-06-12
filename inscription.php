<?php require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if($_POST)
{
    
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']); 
    if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) // 
    {
        $contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    else
    {
        $membre = executeRequete("SELECT * FROM utilisateur WHERE pseudo='$_POST[pseudo]'");
        if($membre->num_rows > 0)
        {
            $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // $_POST['mdp'] = md5($_POST['mdp']);
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            executeRequete("INSERT INTO utilisateur (nom, prenom, pseudo, email, motDePasse) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[pseudo]', '$_POST[email]', '$_POST[motDePasse]')");
            $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web.</div>";
        }
    }
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>

<?php require_once("inc/head.inc.php") ?>

<?php echo $contenu; ?>

<main>
    <p class="formTitle">Inscrivez-vous<p>
    <form class="formulaire" action="" method="POST">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required="required">

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required="required">

        <label for="pseudo">Pseudonyme</label>
        <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required">
          
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" placeholder="exemple@gmail.com" required="required">

        <label for="mdp">Mot de passe</label><br>
        <input type="text" id="motDePasse" name="motDePasse" required="required">

        <label>Confirmation mot de passe</label>
        <input type="text">

        <div class="formButtonCo">
            <button class="ui button" name="inscription" type="submit">Créer</button>
        </div>
    </form>
</main>

<?php require_once("inc/footer.inc.php") ?>