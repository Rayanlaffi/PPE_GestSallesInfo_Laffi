<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
else{
    $racine = $_GET['laRacine'];
}

    require_once("$racine/Modele/salleManager.php");
    require_once("$racine/Modele/mrbsroomManager.php");
    require_once("$racine/Modele/posteManager.php");

    $salleManager = new salleManager();
    $mrbsroomManager = new mrbsroomManager();
    $posteManager = new posteManager();

    $id = $_GET['id'];
    $room = $mrbsroomManager->get($id);
    $nomSalle = $room->getRoomName();
    $capacite = $room->getCapacity();
    $description = $room->getDescription();

    $salle = $salleManager->get($id);
    $nbPoste = $salle->getNbPoste();

    $postes = $posteManager->getPosteParSalle($id);

    include "$racine/vue/VueAffichePostes.php";
?>