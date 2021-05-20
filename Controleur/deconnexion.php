<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

session_start(); 
session_unset(); 
session_destroy();  

include "$racine/vue/entete.php";
include "$racine/vue/vueConnexion.php";
include "$racine/vue/pied.php";