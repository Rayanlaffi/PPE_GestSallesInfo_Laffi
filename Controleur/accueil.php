<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
// AFFICHAGE DE LA PAGE D'ACCUEIL
$titre = "Accueil"; 
include "$racine/vue/entete.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/pied.php";
?>