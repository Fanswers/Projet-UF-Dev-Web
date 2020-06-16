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