<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
else{
    if (isset($_GET['laRacine'])){$racine = $_GET['laRacine'];}
}

require_once("$racine/Modele/salleManager.php");
require_once("$racine/Modele/mrbsroomManager.php");
require_once("$racine/Modele/posteManager.php");

$titre = "Liste des salles";

$salleManager = new salleManager();
$posteManager = new posteManager();

$mrbsroomManager = new mrbsroomManager();
$rooms = $mrbsroomManager->getList();

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $room = $mrbsroomManager->get($id);
    $nomSalle = $room->getRoomName();
    $capacite = $room->getCapacity();
    $description = $room->getDescription();

    $salle = $salleManager->get($id);
    $nbPoste = $salle->getNbPoste();

    $postes = $posteManager->getPosteParSalle($id);
}
if (isset($_GET['poste'])){
    $id = $_GET['id'];
    $nPoste = $_GET['poste'];

    $poste = $posteManager->get($nPoste);
    $nomPoste = $poste->getNomPoste();
    $ad = $poste->getAd();
    $indIP = $poste->getIndIP();
    $nbrLog = $poste->getNbLog();
    $typePoste = $poste->getTypePoste();
}

if (!isset($_GET['laRacine'])){ // je fais ceci pour eviter de repeter l'entete quand on fait retour aux salles
    include "$racine/vue/entete.php";
}

include "$racine/vue/vueAfficheSalles.php";

if (!isset($_GET['laRacine'])){ // je fais ceci pour eviter de repeter le pied quand on fait retour aux salles
    include "$racine/vue/pied.php";
}

?>