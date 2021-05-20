<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

require_once("$racine/Modele/salleManager.php");
require_once("$racine/Modele/mrbsroomManager.php");
require_once("$racine/Modele/posteManager.php");

$titre = "Gestion des postes";

$posteManager = new posteManager();
$postes = $posteManager->getList();

require_once("$racine/Modele/segmentManager.php");
$segmentManager = new segmentManager();
$lesSegments = $segmentManager->getList();

require_once("$racine/Modele/typeManager.php");
$typeManager = new typeManager();
$lesTypes = $typeManager->getList();

include "$racine/vue/entete.php";
include "$racine/vue/vueGestionPostes.php";
include "$racine/vue/pied.php";
?>