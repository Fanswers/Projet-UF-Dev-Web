<?php require_once('inc/init.inc.php'); ?>

<?php require_once("inc/header.inc.php") ?>

<main>
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
