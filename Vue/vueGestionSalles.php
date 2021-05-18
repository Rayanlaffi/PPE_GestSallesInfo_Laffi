<br>
<!-- Partie Modal -->
<div class="row col-md-6 offset-md-3">
<button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#creationPoste">Créer un poste</button>

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
            <label for="indip">IndIp:</label>
            <input type="text" class="form-control" id="indip" name="indip" placeholder="ex: 130.120.8">
          </div>
          <div class="form-group">
            <label for="ad">Ad:</label>
            <input type="text" class="form-control" id="ad" name="ad" placeholder="ex: 01">
          </div>
          <div class="form-group">
            <label for="type">Type de poste:</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="ex: UNIX">
          </div>
          <div class="form-group">
            <label for="nbLog">Nombre de logiciel:</label>
            <input type="text" class="form-control" id="nbLog" name="nbLog" placeholder="ex: 2">
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
  console.log(nomPoste);
  $.post("../PPE_GestSallesInfo_Laffi/traitement/createPoste.php", { laRacine : racine, leNomPoste : nomPoste, leIndip : indip, leAd : ad, leType : type, leNbLog : nbLog },	function(resultat){
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
<?php 
foreach ($postes as $poste) { 
$nPoste = $poste->getnPoste();
?>

<div class="row">
<div class="col-md-6 offset-md-3 list-group-item">
  <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"><?=$poste->getNomPoste()?></h5>
    <small class="text-muted"><span class="badge badge-light"><?=$nPoste?></span></small>
  </div>
  <p class="mb-1"></p>
</div>
<div class="centrage"> <a href=""><span class="edit material-icons">edit</span></a> </div>
</div>

<?php
}
?>

</br>
<style>
.centrage{
  margin-top: auto;
  margin-bottom: auto;
  margin-left: 10px;
  margin-right: 10px;
}
.edit{
  color:black;
}
.edit:hover{
  color:red;
}
</style>


