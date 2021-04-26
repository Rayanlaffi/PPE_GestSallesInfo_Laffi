<br>
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
          <input type="text" class="form-control" id="nomPoste" placeholder="Nom du poste">
        </div>
        <div class="form-group">
          <label for="indip">IndIp:</label>
          <input type="text" class="form-control" id="indip" placeholder="ex: 130.120.8">
        </div>
        <div class="form-group">
          <label for="ad">Ad:</label>
          <input type="text" class="form-control" id="ad" placeholder="ex: 01">
        </div>
        <div class="form-group">
          <label for="type">Type de poste:</label>
          <input type="text" class="form-control" id="type" placeholder="ex: UNIX">
        </div>
        <div class="form-group">
          <label for="nbLog">Nombre de logiciel:</label>
          <input type="text" class="form-control" id="nbLog" placeholder="ex: 2">
        </div>

      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
</div>

<br>
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