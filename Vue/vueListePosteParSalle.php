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
</div>
<?php 
}
?>