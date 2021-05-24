<br>
<div class="row col-md-6 offset-md-3">
  <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#creationSalle">Créer une salle</button>

</div>


<div style="z-index:501">
  <div class="modal fade" id="creationSalle" tabindex="-1" role="dialog" aria-labelledby="creationSalleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="creationSalleLabel">Créer une salle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        
          <div class="form-group">
            <label for="nomSalle">Nom de la salle:</label>
            <input type="text" class="form-control" id="nomSalle" name="nomSalle" placeholder="Nom de la salle">
          </div>
          <div class="form-group">
            <label for="descriptionSalle">Description:</label>
            <input type="text" class="form-control" id="descriptionSalle" name="descriptionSalle" placeholder="description ">
          </div>
          <div class="form-group">
            <label for="capaciteSalle">Capacité:</label>
            <input type="text" class="form-control" id="capaciteSalle" name="capaciteSalle" placeholder="Capacité de la salle">
          </div>
          <div class="form-group">
            <label for="actifSalle">Rendre la salle actif:</label><br>
            <input type="checkbox" id="actifSalle" name="actifSalle" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
          </div>

          <span class="message"></span>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" onclick="createSalle()" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>
</div>