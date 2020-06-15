<?php
//--------- BDD ---------//
$mysqli = new mysqli("localhost", "root", "", "legendary_trip");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
 
//--------- SESSION ---------//
session_start();

//--------- INCLUSIONS ---------//
require_once("fonction.inc.php");
 
//--------- VARIABLES ---------//
$contenu = '';
if ($_SESSION)
{
    $id_userTmp = implode("   ", $_SESSION['utilisateur']);
    $id_user = substr($id_userTmp, 0, 3);
}

//--------- SUPRESSION LOGEMENT DANS LA BDD ---------//
 

if(!empty($_GET['id'])) {
    $del = $_GET['id'];
    executeRequete("DELETE FROM logement WHERE id_logement = $del"); 
  }

