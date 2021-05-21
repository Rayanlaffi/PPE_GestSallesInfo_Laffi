<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
else{
    $racine = $_POST['laRacine'];
}
require_once("$racine/Modele/posteManager.php");

$nPoste = $_POST['nPoste'];
$posteManager = new posteManager();

$nomPoste = "A supprimer";
$indip = null;
$ad = null;
$type = null;
$nbLog = null;
$salle = null;
$posteManager->modifierPoste($nPoste,$nomPoste,$indip,$ad,$type,$nbLog, $salle); // je vide les champs pour pas avoir des erreurs de clés étrangères
$posteManager->supprimerPoste($nPoste); // je la suprr



?>