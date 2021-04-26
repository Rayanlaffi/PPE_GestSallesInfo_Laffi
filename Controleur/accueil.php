<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Accueil";
include "$racine/vue/entete.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/pied.php";
?>