<?php require_once('inc/init.inc.php'); ?>

<?php require_once("inc/header.inc.php") ?>

<main>

    <div class="ui loading fluid multiple search selection dropdown">
        <input type="hidden" name="country" value="kp">
        <i class="dropdown icon"></i>
        <input class="search">
        <div class="default text">Search...</div>
        <div class="menu">
            <div class="item">Choice 1</div>
            <div class="item">Choice 2</div>
            <div class="item">Choice 3</div>
        </div>
    </div>

    <?php
        $resultat = executeRequete("SELECT * FROM logement");

        $contenu .= '<table border="1"><tr>';
         
        //Afficher colonnes de la tables
        while($colonne = $resultat->fetch_field())
        {    
            $contenu .= '<th>' . $colonne->name . '</th>';
        }

        //Afficher valeur des colonnes
        while ($ligne = $resultat->fetch_assoc())
        {
            $contenu .= '<tr>';
            foreach ($ligne as $indice => $information)
                {
                    $contenu .= '<td>' . $information . '</td>';
                }
            $contenu .= '</tr>';
        }
        $contenu .= '</table><br><hr><br>';
        echo $contenu;
    ?>
</main>

<?php require_once("inc/footer.inc.php") ?>
