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

    $nPoste = $_GET['idPoste'];
    $idSalle = $_GET['id'];
    $poste = $posteManager->get($nPoste);
    $nomPoste = $poste->getNomPoste();
    $ad = $poste->getAd();
    $indIP = $poste->getIndIP();
    $nbrLog = $poste->getNbLog();
    $typePoste = $poste->getTypePoste();

    include "$racine/vue/vueInformationsPoste.php";
?>