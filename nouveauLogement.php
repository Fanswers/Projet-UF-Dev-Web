<?php require_once('inc/init.inc.php');
//--------------------------------- TRAITEMENTS PHP ---------------------------------//

if($_POST)
{
    // Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($mysqli, $_POST['image_text']);

    executeRequete("INSERT INTO logement (logement_type, total_occupant, total_chambre, total_toilette, adresse, tv, kitchen, climatisation, chauffage, internet, prix, proprietaire_id, image, image_text) VALUES ('$_POST[logement_type]', '$_POST[total_occupant]', '$_POST[total_chambre]', '$_POST[total_toilette]', '$_POST[adresse]', '$_POST[tv]', '$_POST[kitchen]', '$_POST[climatisation]', '$_POST[chauffage]', '$_POST[internet]', '$_POST[prix]', '$id_user', '$image', '$image_text')");
    //executeRequete("INSERT INTO logement (proprietaire_id) VALUES ()");



  	// image file directory
    $target = "img/".basename($image);
      

    //$sql = executeRequete("INSERT INTO logement (image, image_text) VALUES ('$image', '$image_text')");

    // execute query
  	//mysqli_query($mysqli, $sql);
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>


<?php require_once("inc/header.inc.php") ?>

<main>
    <p class="formTitle">Nouveau logement<p>
    <form class="formulaire" action="" method="POST" enctype="multipart/form-data">
        <label for="logement_type">Type de logement</label>
        <input type="text" id="logement_type" name="logement_type" required="required">

        <label for="total_occupant">Combien de personnes</label>
        <input type="number" id="total_occupant" name="total_occupant" required="required" min="1" max="99">

        <label for="total_chambre">Combien de chambres</label>
        <input type="number" id="total_chambre" name="total_chambre" required="required" min="1" max="99">

        <label for="total_toilette">Combien de toilettes</label>
        <input type="number" id="total_toilette" name="total_toilette" required="required" min="1" max="99">

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" required="required">
        
        <select name="departement" id="departement" class="ui search selection dropdown" form="formulaire">
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

        <label for="tv">Une télé ?</label>
        <br>oui
        <input type="radio" id="tv" name="tv"  value="1" required="required">
        <br>non
        <input type="radio" id="tv" name="tv"  value="0" required="required">

        <label for="kitchen">Cuisine ?</label>
        <br>oui
        <input type="radio" id="kitchen" name="kitchen"  value="1" required="required">
        <br>non
        <input type="radio" id="kitchen" name="kitchen"  value="0" required="required">

        <label for="climatisation">Climatisation ?</label>
        <br>oui
        <input type="radio" id="climatisation" name="climatisation"  value="1" required="required">
        <br>non
        <input type="radio" id="climatisation" name="climatisation"  value="0" required="required">

        <label for="chauffage">Chauffage ?</label>
        <br>oui
        <input type="radio" id="chauffage" name="chauffage"  value="1" required="required">
        <br>non
        <input type="radio" id="chauffage" name="chauffage"  value="0" required="required">

        <label for="internet">Internet ?</label>
        <br>oui
        <input type="radio" id="internet" name="internet"  value="1" required="required">
        <br>non
        <input type="radio" id="internet" name="internet"  value="0" required="required">

        <label for="image">image</label>
  	    <input type="file" name="image" id="image">

        <label for="image_text">Description</label>
        <input type="text" id="image_text" name="image_text" required="required">
        
        <label for="prix">Prix</label>
        <input type="text" id="prix" name="prix" required="required">

        <div class="formButtonCo">
            <button class="ui button" name="ajouterLogement" type="submit">Ajouter</button>
        </div>
    </form>
</main>

<?php require_once("inc/footer.inc.php") ?>