<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/utilisateurManager.php");
$utilisateurManager = new utilisateurManager();

$titre = "Se Connecter";
include "$racine/vue/entete.php";

if(isset($_POST['mail'])){
    $mailSaisie = htmlspecialchars($_POST['mail']);
    $mdpSaisie = htmlspecialchars($_POST['mdp']);
    $mdpSaisie = md5($mdpSaisie);
    $user = $utilisateurManager->getUserByMail($mailSaisie);
    if( $mailSaisie == $user->getEmail() && $mdpSaisie == $user->getPassword() ){
        // session_start();
        $_SESSION['permission'] = $user->getPermission();
        $_SESSION['id'] = $user->getId();
        $_SESSION['nom'] = $user->getNom();
        $_SESSION['prenom'] = $user->getPrenom();
        $_SESSION['email'] = $user->getEmail();
        $_SESSION['telephone'] = $user->getTelephone();
        header('Location: index.php?action=accueil&connexion=1');
    }
    else{
        header('Location: index.php?action=connexion&connexion=0');
    }

    
}
else{
    include "$racine/vue/vueConnexion.php";
}




include "$racine/vue/pied.php";
?>