<?php require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if($_POST)
{
    $resultat = executeRequete("SELECT * FROM utilisateur WHERE pseudo='$_POST[pseudo]'");
    if($resultat->num_rows != 0)
    {

        $membre = $resultat->fetch_assoc();
        if($membre['motDePasse'] == $_POST['motDePasse'])
        {
            $contenu .= '<div class="validation">Bonjour ' . $membre['pseudo'] . ' ! </div>';
            foreach($membre as $indice => $element)
            {
                if($indice != 'motDePasse')
                {
                    $_SESSION['utilisateur'][$indice] = $element;
                }
            }
        }
        else
        {
            $contenu .= '<div class="erreur">Erreur de MDP</div>';
        }       
    }
    else
    {
        $contenu .= '<div class="erreur">Erreur de pseudo</div>';
    }
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>

<?php require_once("inc/header.inc.php") ?>

<?php echo $contenu; ?>
 
<main>
    <p class="formTitle">Connectez-vous<p>
    <form method="post" action="" method="GET" class="formulaire">
        <label for="pseudo">Pseudonyme</label>
        <input type="text" id="pseudo" name="pseudo">
         
        <label for="motDePasse">Mot de passe</label>
        <input type="text" id="motDePasse" name="motDePasse">
 
        <div class="formButtonCo">
            <button class="ui button" type="submit">Se connecter</button>
        </div>
    </form>
    <div class="formButtonInsc">
        <a href="inscription.php"><button class="ui button">Pas de compte ?</button></a>
    </div>
</main>

<?php require_once("inc/footer.inc.php") ?>