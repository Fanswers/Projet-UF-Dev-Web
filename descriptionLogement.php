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
                        <img src="img/<?php echo $ligne->image ?>" class="descImg">
                    </div>
                    <div>
                        <p class="descTitle"><?php echo $ligne->logement_type ?><p>
                        <div class="meta">
                            <p class="descriptionLogement"><?php echo $ligne->image_text ?></p>
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

<?php 
    if($_POST)
    {
        function changeDate($dateTmp)
            {
                $noChar = "";
                $comma = ",";
                $dateTmp = str_replace($comma, $noChar, $dateTmp);
                $dateTmp2 = explode(" ", $dateTmp);
                if($dateTmp2[0] == "January")
                    $dateTmp2[0] = "01";
                else if($dateTmp2[0] == "February")
                    $dateTmp2[0] = "02";
                else if($dateTmp2[0] == "March")
                    $dateTmp2[0] = "03";
                else if($dateTmp2[0] == "April")
                    $dateTmp2[0] = "04";
                else if($dateTmp2[0] == "May")
                    $dateTmp2[0] = "05";
                else if($dateTmp2[0] == "June")
                    $dateTmp2[0] = "06";
                else if($dateTmp2[0] == "July")
                    $dateTmp2[0] = "07";
                else if($dateTmp2[0] == "August")
                    $dateTmp2[0] = "08";
                else if($dateTmp2[0] == "September")
                    $dateTmp2[0] = "09";
                else if($dateTmp2[0] == "October")
                    $dateTmp2[0] = "10";
                else if($dateTmp2[0] == "November")
                    $dateTmp2[0] = "11";
                else
                    $dateTmp2[0] = "12";
            
                if($dateTmp2[1] < 10)
                    $dateTmp2[1] = "0".$dateTmp2[1];

                $date = array("$dateTmp2[2]","$dateTmp2[0]","$dateTmp2[1]");
                $date = implode("-", $date);

                return $date;
            }
        $dateDebut = changeDate($_POST['date_debut']);
        $datefin = changeDate($_POST['date_fin']);
        echo($dateDebut);
        executeRequete("INSERT INTO reservation (id_utilisateur, id_logement, date_debut, dete_fin, prix_total, nb_personne) VALUES ($id_user, $_GET[id], '$dateDebut', '$datefin', 100, $_POST[total_occupant])");
    }
?>

<main>
    <form id="reseration-form" method="POST">
        <!--Occupant-->
        <label for="total_occupant">Voyageurs</label><br>
        <input type="number" id="total_occupant" name="total_occupant" min="1" max="99">

        <!--Calendar-->
        <div class="field">
            <label for="date_debut">Start date</label>
            <div class="ui calendar" id="rangestart">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input id="date_debut" name="date_debut" type="text" placeholder="Start">
                </div>
            </div>
        </div>
        <div class="field">
            <label for="date_fin">End date</label>
            <div class="ui calendar" id="rangeend">
                <div class="ui input left icon">
                    <i class="calendar icon"></i>
                    <input id="date_fin" name="date_fin" type="text" placeholder="End">
                </div>
            </div>
        </div>
        <div class="formButtonCo">
            <button class="ui button" name="reserverLogement" type="submit">Reserver</button>
        </div>
    </form>
</main>

<?php require_once("inc/footer.inc.php") ?>