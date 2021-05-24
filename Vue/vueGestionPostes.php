<br>
<!-- Partie Modal -->
<div class="row col-md-6 offset-md-3">
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#creationPoste">Créer un poste</button>
<button type="button" onclick="window.location.href='./?action=affichePosteParSalle'" class="btn btn-secondary btn-lg btn-block">Gestion des salles (Pas encore fonctionnel)</button>

</div>

<div style="z-index:501">
  <div class="modal fade" id="creationPoste" tabindex="-1" role="dialog" aria-labelledby="creationPosteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="creationPosteLabel">Créer un poste</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        
          <div class="form-group">
            <label for="nomPoste">Nom du poste:</label>
            <input type="text" class="form-control" id="nomPoste" name="nomPoste" placeholder="Nom du poste">
          </div>
          <div class="form-group">
            <label for="indip">Segment:</label>
            <select class="form-control" id="indip">
            <?php foreach ($lesSegments as $leSegment) { ?>
                <option value="<?= $leSegment->getIndIP()?>"><?= $leSegment->getNomSegment()?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="ad">Ad:</label>
            <input type="text" class="form-control" id="ad" name="ad" placeholder="ex: 01">
          </div>
          <div class="form-group">
            <label for="type">Type de poste:</label>
            <select class="form-control" id="type">
            <?php foreach ($lesTypes as $leType) { ?>
                <option value="<?= $leType->getTypeLP()?>"><?= $leType->getNomType()?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nbLog">Nombre de logiciel:</label>
            <input type="text" class="form-control" id="nbLog" name="nbLog" placeholder="ex: 2">
          </div>

          <div class="form-group">
          <label for="salle">Salle:</label>
            <select class="form-control" id="salle">
              <option selected value="null">Ne pas l’installer dans une salle.</option>
              <?php foreach ($rooms as $room) { 
                $placesRestantes = $mrbsroomManager->getPlacesRestantes($room->getId()); // methode temporaire (à changer car c'est moche)
                if ($placesRestantes != 0){ // si il y a encore de la place
                ?>
                  <option value="<?= $room->getId()?>">
                    <?= $room->getRoomName()?> Places restantes: <?= $placesRestantes .'/'.$room->getCapacity()  ?>
                  </option>
              <?php } } ?>
            </select>
          </div>

          <span class="message"></span>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" onclick="createPoste()" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalMessage" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Information:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><span class="message"></span></p>
      </div>
      <div class="modal-footer">
        <button onclick="document.location.reload();" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- fin des modals -->
<!-- fonctions js -->
<script>
function createPoste() {
  var racine = <?php echo json_encode($racine); ?>;
  var nomPoste = $('#nomPoste').val(); 
  var indip = $('#indip').val(); 
  var ad = $('#ad').val(); 
  var type = $('#type').val(); 
  var nbLog = $('#nbLog').val();
  var salle = $('#salle').val();
  $.post("../PPE_GestSallesInfo_Laffi/traitement/createPoste.php", { laRacine : racine, leNomPoste : nomPoste, leIndip : indip, leAd : ad, leType : type, leNbLog : nbLog, laSalle : salle },	function(resultat){
    if(nomPoste != ""){
      $('.message').html('Le poste a bien été créé.');
      $('.message').css('color','green');  
      $('#creationPoste').modal('hide');
      $("#modalMessage").modal('toggle');
      
    }
    else{
      $('.message').html('Vous devez au moins renseigner le nom du poste.');
      $('.message').css('color','red');
    }
    

  });
}
</script>
<!-- fin fonctions js -->
<br>
<!-- affichage des postes -->


<script>
$(document).ready( function () {
  $('#table').DataTable(
  {
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.10.22/i18n/French.json"
        },
        responsive: true
  }
);
} );
</script>

<div class="container">
<table id="table" class="table table-striped display">
  <thead>
    <tr>
      <th class="text-center">Listes des postes</th>
    <tr> 
  </thead>
  <tbody>
    
      
<?php 
foreach ($postes as $poste) { 
$nPoste = $poste->getnPoste();
?>
<tr>
  <td class="text-center">
    <div class="row">
      <div class="col-md-6 offset-md-3 list-group-item">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?=$poste->getNomPoste()?></h5>
          <small class="text-muted"><span class="badge badge-light"><?=$nPoste?></span></small>
        </div>
        <p class="mb-1"></p>
      </div>
      
      <div class="centrage"> <a data-toggle="tooltip" data-placement="top" title="Modifier le poste"id="<?=$nPoste?>" onclick="openModifierPoste(this.id)" href="#"><span class="edit material-icons">edit</span></a></li> </div>
      <div class="centrage"> <a data-toggle="tooltip" data-placement="top" title="Supprimer le poste"id="<?=$nPoste?>" onclick="deletePoste(this.id)" href="#"><span class="edit material-icons">clear</span></a></li> </div>
      
    </div>
    
  </td>
</tr>
<?php
}
?>
      
  </tbody>
</table>
</div>
<div id="contenuModiferPoste"></div>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
function openModifierPoste(nPoste) {
  var racine = <?php echo json_encode($racine); ?>;
  $.post("../PPE_GestSallesInfo_Laffi/traitement/modifierPoste.php", { laRacine : racine, nPoste : nPoste },	function(resultat){
    $("#contenuModiferPoste").html(resultat);
    $("#modifierPoste").modal('toggle');
  });
}

function deletePoste(nPoste) {
  var racine = <?php echo json_encode($racine); ?>;
  var confirmation = confirm("Voulez vous vraiment supprimer le poste "+nPoste+" ?");
  if (confirmation == true) {
    $.post("../PPE_GestSallesInfo_Laffi/traitement/supprimerPoste.php", { laRacine : racine, nPoste : nPoste },	function(resultat){
      $('.message').html('Le poste '+ nPoste + ' a bien été supprimé.');
      $('.message').css('color','red');  
      $("#modalMessage").modal('toggle');
    });
  } else {
    
  }
  
} 
</script>
