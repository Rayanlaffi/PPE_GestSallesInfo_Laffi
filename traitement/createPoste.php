<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
else{
    $racine = $_POST['laRacine'];
}

require_once("$racine/Modele/posteManager.php");
$posteManager = new posteManager();
if (isset($_POST['leNomPoste']) && $_POST['leNomPoste'] != ""){
    $nomPoste = $_POST['leNomPoste'];
    $indip = $_POST['leIndip'];
    $ad = $_POST['leAd'];
    $type = $_POST['leType'];
    $nbLog = $_POST['leNbLog'];
    $posteManager->createPoste($nomPoste,$indip,$ad,$type,$nbLog);
}


?>