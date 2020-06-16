<?php require_once('inc/init.inc.php'); ?>

<?php require_once("inc/header.inc.php") ?>

<main>
    <div class="ui container">
    <!--Dropdown-->
    <select name="departement" id="departement-select" class="ui search selection dropdown" form="departement-form">
        <option value="00">Départements</option>
        <option value="01">01 - Ain</option>
        <option value="02">02 - Aisne</option>
        <option value="03">03 - Allier</option>
        <option value="04">04 - Alpes de Haute Provence</option>
        <option value="05">05 - Hautes Alpes</option>
        <option value="06">06 - Alpes Maritimes</option>
        <option value="07">07 - Ard&#232;che</option>
        <option value="08">08 - Ardennes</option>
        <option value="09">09 - Ari&#232;ge</option>
        <option value="10">10 - Aube</option>
        <option value="11">11 - Aude</option>
        <option value="12">12 - Aveyron</option>
        <option value="13">13 - Bouches du Rh&#244;ne</option>
        <option value="14">14 - Calvados</option>
        <option value="15">15 - Cantal</option>
        <option value="16">16 - Charente</option>
        <option value="17">17 - Charente Maritime</option>
        <option value="18">18 - Cher</option>
        <option value="19">19 - Corr&#232;ze</option>
        <option value="2A">2A - Corse du Sud</option>
        <option value="2B">2B - Haute-Corse</option>
        <option value="21">21 - C&#244;te d'Or</option>
        <option value="22">22 - C&#244;tes d'Armor</option>
        <option value="23">23 - Creuse</option>
        <option value="24">24 - Dordogne</option>
        <option value="25">25 - Doubs</option>
        <option value="26">26 - Dr&#244;me</option>
        <option value="27">27 - Eure</option>
        <option value="28">28 - Eure et Loir</option>
        <option value="29">29 - Finist&#232;re</option>
        <option value="30">30 - Gard</option>
        <option value="31">31 - Haute Garonne</option>
        <option value="32">32 - Gers</option>
        <option value="33">33 - Gironde</option>
        <option value="34">34 - H&#233;rault</option>
        <option value="35">35 - Ille et Vilaine</option>
        <option value="36">36 - Indre</option>
        <option value="37">37 - Indre et Loire</option>
        <option value="38">38 - Is&#232;re</option>
        <option value="39">39 - Jura</option>
        <option value="40">40 - Landes</option>
        <option value="41">41 - Loir et Cher</option>
        <option value="42">42 - Loire</option>
        <option value="43">43 - Haute Loire</option>
        <option value="44">44 - Loire Atlantique</option>
        <option value="45">45 - Loiret</option>
        <option value="46">46 - Lot</option>
        <option value="47">47 - Lot et Garonne</option>
        <option value="48">48 - Loz&#232;re</option>
        <option value="49">49 - Maine et Loire</option>
        <option value="50">50 - Manche</option>
        <option value="51">51 - Marne</option>
        <option value="52">52 - Haute Marne</option>
        <option value="53">53 - Mayenne</option>
        <option value="54">54 - Meurthe et Moselle</option>
        <option value="55">55 - Meuse</option>
        <option value="56">56 - Morbihan</option>
        <option value="57">57 - Moselle</option>
        <option value="58">58 - Ni&#232;vre</option>
        <option value="59">59 - Nord</option>
        <option value="60">60 - Oise</option>
        <option value="61">61 - Orne</option>
        <option value="62">62 - Pas de Calais</option>
        <option value="63">63 - Puy de D&#244;me</option>
        <option value="64">64 - Pyr&#233;n&#233;es Atlantiques</option>
        <option value="65">65 - Hautes Pyr&#233;n&#233;es</option>
        <option value="66">66 - Pyr&#233;n&#233;es Orientales</option>
        <option value="67">67 - Bas Rhin</option>
        <option value="68">68 - Haut Rhin</option>
        <option value="69">69 - Rh&#244;ne</option>
        <option value="70">70 - Haute Sa&#244;ne</option>
        <option value="71">71 - Sa&#244;ne et Loire</option>
        <option value="72">72 - Sarthe</option>
        <option value="73">73 - Savoie</option>
        <option value="74">74 - Haute Savoie</option>
        <option value="75">75 - Paris</option>
        <option value="76">76 - Seine Maritime</option>
        <option value="77">77 - Seine et Marne</option>
        <option value="78">78 - Yvelines</option>
        <option value="79">79 - Deux S&#232;vres</option>
        <option value="80">80 - Somme</option>
        <option value="81">81 - Tarn</option>
        <option value="82">82 - Tarn et Garonne</option>
        <option value="83">83 - Var</option>
        <option value="84">84 - Vaucluse</option>
        <option value="85">85 - Vend&#233;e</option>
        <option value="86">86 - Vienne</option>
        <option value="87">87 - Haute Vienne</option>
        <option value="88">88 - Vosges</option>
        <option value="89">89 - Yonne</option>
        <option value="90">90 - Territoire de Belfort</option>
        <option value="91">91 - Essonne</option>
        <option value="92">92 - Hauts de Seine</option>
        <option value="93">93 - Seine Saint Denis</option>
        <option value="94">94 - Val de Marne</option>
        <option value="95">95 - Val d'Oise</option>
        <option value="971">971 - Guadeloupe</option>
        <option value="972">972 - Martinique</option>
        <option value="973">973 - Guyane</option>
        <option value="974">974 - R&#233;union</option>
        <option value="975">975 - Saint Pierre et Miquelon</option>
        <option value="976">976 - Mayotte</option>
    </select>

    <form id="departement-form" method="POST">
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
        <input type="submit">
    </form>
    <script>
        //Dropdown JS
        $('#departement-select').dropdown();
        //Calendar JS
        $('#rangestart').calendar({type: 'date',endCalendar: $('#rangeend')});
        $('#rangeend').calendar({type: 'date',startCalendar: $('#rangestart')});
    </script>

    <div class=carteLogementTotal>
        <?php
            //Changer le format de date
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
            
            //Recherche dans BDD
            if(!$_POST)
            {
                $resultat = executeRequete("SELECT * FROM logement");
            }//departement
            elseif($_POST['departement'] and !$_POST['total_occupant'] and !$_POST['date_debut'] and !$_POST['date_fin'])
            {   
                $departement = $_POST['departement'];
                $resultat = executeRequete("SELECT * FROM logement WHERE departement LIKE $departement");
            }//occupant
            elseif($_POST['total_occupant'] and !$_POST['departement'] and !$_POST['date_debut'] and !$_POST['date_fin'])
            {
                $total_occupant = $_POST['total_occupant'];
                $resultat = executeRequete("SELECT * FROM logement WHERE total_occupant >= $total_occupant");
            }//date
            //elseif($_POST['date_debut'] != '' and $_POST['date_fin'] != '' and !$_POST['total_occupant'])
            //{
                //echo("date");
                //$dateDebutInit = $_POST['date_debut'];
                //$dateFinInit = $_POST['date_fin'];
                //$dateDebut = changeDate($dateDebutInit);
                //$dateFin = changeDate($dateFinInit);
                //$result = $mysqli->query("SELECT * FROM reservation WHERE date_debut = $dateDebut AND dete_fin = $dateFin");
                //$resultat = execureRequete("SELECT * FROM logement WHERE id_logement = $resultat");
            //}//departement et occupant
            elseif($_POST['departement'] and $_POST['total_occupant'])
            {
                $departement = $_POST['departement'];
                $total_occupant = $_POST['total_occupant'];
                $resultat = executeRequete("SELECT * FROM logement WHERE departement LIKE $departement AND total_occupant >= $total_occupant");
            }
            

            //Afficher valeur des colonnes
            while ($ligne = $resultat->fetch_object())
            {
                ?>
                <div class=carteLogement>
                    <div class="ui card">
                        <div class="ui slide masked reveal image">
                            <img src="img/<?php echo $ligne->image ?>" class="visible content">
                            <img src="img/avatar/large/elliot.jpg" class="hidden content">
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
                        <div>
                            <p></p>
                            <a href="descriptionLogement.php?id=<?php echo $ligne->id_logement ?>"><button class="ui button">En savoir plus</button></a>
                        </div>
                    </div>
                </div>
                <?php
                
            }
        ?>
    </div>
    </div>
</main>

<?php require_once("inc/footer.inc.php") ?>