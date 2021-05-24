<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

require_once("$racine/Modele/salleManager.php");
require_once("$racine/Modele/mrbsroomManager.php");

$titre = "Gestion des Salles";

$mrbsroomManager = new mrbsroomManager();
$rooms = $mrbsroomManager->getList();



include "$racine/vue/entete.php";
include "$racine/vue/vueGestionSalle.php";
include "$racine/vue/pied.php";
?>