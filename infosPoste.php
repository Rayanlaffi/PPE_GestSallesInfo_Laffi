<?php
    require_once("Modele/salleManager.php");
    require_once("Modele/mrbsroomManager.php");
    require_once("Modele/posteManager.php");

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
    ?>

<!-- Affichage des informations des postes dans la salle -->

<a class="col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?=$nomPoste?></h5>
        <small class="text-muted"><span class="badge badge-light"><?=$nPoste?></span></small>
    </div>
    <p class="text-center mb-1"><b>Type de poste:</b> <?=$typePoste?></p>
    <p class="text-center mb-1"><b>Nombre de logiciels:</b> <?=$nbrLog?></p>
    <p class="text-center mb-1"><b>Ip: </b><?=$indIP?></p>
    <p class="text-center mb-1"><b>Ad: </b><?=$ad?></p>
</a>

<a class="col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
    <button type="button" class="retour col-md-6 offset-md-3 btn btn-secondary btn-sm">Retour aux postes</button>
</a>

<!-- Fin Affichage des informations des postes dans la salle -->


<!-- Retour vers postes -->
<script>
$(document).ready(function(){
    $(".retour").click(function(){
        $.ajax({url: "affichePoste.php?id="+<?=$idSalle?>, success: function(result){
        $("#contenu").html(result);
        }});
    });
});  
</script>