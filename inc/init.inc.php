<?php
//--------- BDD ---------//
$mysqli = new mysqli("localhost", "root", "", "legendary_trip");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
 
//--------- SESSION ---------//
session_start();
 
//--------- VARIABLES ---------//
$contenu = '';
if ($_SESSION)
{
    $id_userTmp = implode("   ", $_SESSION['utilisateur']);
    $id_user = substr($id_userTmp, 0, 3);
}

 
//--------- INCLUSIONS ---------//
require_once("fonction.inc.php");