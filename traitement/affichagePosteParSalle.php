<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
else{
    $racine = $_GET['laRacine'];
}

    require_once("$racine/Modele/posteManager.php");
    $posteManager = new posteManager();
    $idSalle = $_GET['id'];
    $postes = $posteManager->getPosteParSalle($idSalle);

    include "$racine/vue/vueListePosteParSalle.php";
?>