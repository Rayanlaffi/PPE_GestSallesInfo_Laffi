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

include "$racine/vue/entete.php";
include "$racine/vue/vueGestionSalles.php";
include "$racine/vue/pied.php";
?>