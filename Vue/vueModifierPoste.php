<div style="z-index:501">
  <div class="modal fade" id="modifierPoste" tabindex="-1" role="dialog" aria-labelledby="modifierPosteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modifierPosteLabel">Modifier le poste <?= $nPoste?> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        
          <div class="form-group">
            <label for="nomPosteModif">Nom du poste:</label>
            <input type="text" class="form-control" id="nomPosteModif" name="nomPosteModif" value="<?= $poste->getNomPoste()?>">
          </div>
          <div class="form-group">
            <label for="indipModif">Segment:</label>
            <select class="form-control" id="indipModif">
                <option selected value="<?= $currentSegment->getIndIP()?>"><?= $currentSegment->getNomSegment()?></option>
            <?php foreach ($lesSegments as $leSegment) { 
                if ($leSegment->getIndIP() != $currentSegment->getIndIP()) {
                ?>
                <option value="<?= $leSegment->getIndIP()?>"><?= $leSegment->getNomSegment()?></option>
            <?php } } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="adModif">Ad:</label>
            <input type="text" class="form-control" id="adModif" name="adModif" value="<?= $poste->getAd()?>">
          </div>
          <div class="form-group">
            <label for="typeModif">Type de poste:</label>
            <select class="form-control" id="typeModif">
                <option selected value="<?= $currentType->getTypeLP() ?>"><?= $currentType->getNomType() ?></option>
            <?php foreach ($lesTypes as $leType) { 
                if ($leType->getTypeLP() != $currentType->getTypeLP()) {
                ?>
                <option value="<?= $leType->getTypeLP()?>"><?= $leType->getNomType()?></option>
            <?php } } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nbLogModif">Nombre de logiciel:</label>
            <input type="text" class="form-control" id="nbLogModif" name="nbLogModif" value="<?= $poste->getNbLog()?>">
          </div>

          <div class="form-group">
          <label for="salleModif">Salle:</label>
            <select class="form-control" id="salleModif">
            <?php if ($currentRoom->getId() == null) { ?> 
              <option value="null">Ne pas l’installer dans une salle.</option>
              <?php }else{ ?>
              <option selected value="<?= $currentRoom->getId()?>"><?= $currentRoom->getRoomName()?> Places restantes: <?= $placesRestantesCurrentRoom .'/'.$currentRoom->getCapacity() ?></option>

              <?php } foreach ($rooms as $room) { 
                $placesRestantes = $mrbsroomManager->getPlacesRestantes($room->getId()); // methode temporaire (à changer car c'est moche)
                if ($placesRestantes != 0 && $currentRoom->getId() != $room->getId()){ // s'il y a encore de la place
                ?>
                  <option value="<?= $room->getId()?>">
                    <?= $room->getRoomName()?> Places restantes: <?= $placesRestantes .'/'.$room->getCapacity()  ?>
                  </option>
              <?php } } ?>
              
              
            </select>
          </div>

          <span class="messageModif"></span>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button id="<?= $nPoste?>" type="button" onclick="modifierPoste(this.id)" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function modifierPoste(nPoste) {
  var racine = <?php echo json_encode($racine); ?>;
  var modification = "1"; // valeur inutile
  var nomPoste = $('#nomPosteModif').val(); 
  var indip = $('#indipModif').val(); 
  var ad = $('#adModif').val(); 
  var type = $('#typeModif').val(); 
  var nbLog = $('#nbLogModif').val();
  var salle = $('#salleModif').val();
  var placesRestantes = null;
  jQuery.ajax({
    url: '../PPE_GestSallesInfo_Laffi/traitement/getPlacesRestantes.php',
    type: 'POST',
    data: {salle: salle, laRacine : racine },
        error:function(data)
        {
            alert("erreur fonction modifier poste js");
            console.log(data);
        },
        success: function(data) 
        {                                                                                
          placesRestantes = parseInt(data);
          
        }
  });
  $.post("../PPE_GestSallesInfo_Laffi/traitement/modifierPoste.php", { laRacine : racine, leNomPoste : nomPoste, leIndip : indip, leAd : ad, leType : type, leNbLog : nbLog, nPoste : nPoste, laSalle : salle, modification : modification  },function(resultat){
    if(nomPoste != "" && placesRestantes !=0){
      $('.message').html('Le poste a bien été modifié.' );
      $('.message').css('color','green');  
      $('#modifierPoste').modal('hide');
      $("#modalMessage").modal('toggle');
      
    }
    else{
      if(placesRestantes == 0){
        $('#modifierPoste').modal('hide');
        $('.message').html('La salle est pleine.');
        $('.message').css('color','red');
        $("#modalMessage").modal('toggle');
      }else{
          $('#modifierPoste').modal('hide');
          $('.message').html('Vous devez au moins renseigner le nom du poste.');
          $('.message').css('color','red');
          $("#modalMessage").modal('toggle');
        }
      }
      
    
  });
}
  
</script>