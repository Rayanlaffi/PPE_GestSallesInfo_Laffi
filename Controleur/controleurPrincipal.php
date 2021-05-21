<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["salles"]= "afficheSalles.php";
    $lesActions["contact"]= "contact.php";

    if (isset($_SESSION['id'])){
        $lesActions["deconnexion"]= "deconnexion.php"; 
    }else{
        $lesActions["connexion"]= "connexion.php";
    }


    if (isset($_SESSION['permission']) && $_SESSION['permission'] == 1){
        $lesActions["gestionPoste"]= "gestionPoste.php"; 
    } 
    



    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
?>
