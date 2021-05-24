<?php 

    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
        $racine = "..";
    }
    else{
        $racine = $_POST['laRacine'];
    }
    require_once("$racine/Modele/mrbsroomManager.php");
    $idSalle = $_POST['salle'];
    $mrbsroomManager = new mrbsroomManager();
    $placesRestantes = $mrbsroomManager->getPlacesRestantes($idSalle);

    echo $placesRestantes;

?>