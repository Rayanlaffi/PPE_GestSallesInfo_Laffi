<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Contact";
include "$racine/vue/entete.php";
include "$racine/vue/vueContact.php";
include "$racine/vue/pied.php";
?>