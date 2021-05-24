<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
else{
    $racine = $_POST['laRacine'];
}
require_once("$racine/Modele/posteManager.php");
require_once("$racine/Modele/segmentManager.php");
require_once("$racine/Modele/typeManager.php");
require_once("$racine/Modele/salleManager.php");
require_once("$racine/Modele/mrbsroomManager.php");

$nPoste = $_POST['nPoste'];
$posteManager = new posteManager();

if (!isset($_POST['modification'])) { // pour savoir si on doit afficher le modal ou modifier les donnees

    $poste = $posteManager->get($nPoste);
    $indIP = $poste->getIndIP();
    $typeLP = $poste->getTypePoste();
    $idSalle = $poste->getIdSalle();
    
    $segmentManager = new segmentManager();
    $lesSegments = $segmentManager->getList();
    $currentSegment = $segmentManager->get($indIP);
    
    $typeManager = new typeManager();
    $lesTypes = $typeManager->getList();
    $currentType = $typeManager->get($typeLP);

    $salleManager = new salleManager();
    $mrbsroomManager = new mrbsroomManager();
    $rooms = $mrbsroomManager->getList();
    $currentRoom = $mrbsroomManager->get($idSalle);
    $placesRestantesCurrentRoom = $mrbsroomManager->getPlacesRestantes($currentRoom->getId());

    $salles = $salleManager->getList();


    include "$racine/vue/vueModifierPoste.php";
}
else{

    if (isset($_POST['leNomPoste']) && $_POST['leNomPoste'] != "") {
        $salleManager = new salleManager();
        $mrbsroomManager = new mrbsroomManager();
        $nomPoste = $_POST['leNomPoste'];
        $indip = $_POST['leIndip'];
        $ad = $_POST['leAd'];
        $type = $_POST['leType'];
        $nbLog = $_POST['leNbLog'];
        $salle = $_POST['laSalle'];
        if($salle == "null"){$salle = null;}

        $placesRestantesCurrentRoom = $mrbsroomManager->getPlacesRestantes($salle);
        if($placesRestantesCurrentRoom !=0){
            $posteManager->modifierPoste($nPoste,$nomPoste,$indip,$ad,$type,$nbLog, $salle);
        }
    }


}



?>