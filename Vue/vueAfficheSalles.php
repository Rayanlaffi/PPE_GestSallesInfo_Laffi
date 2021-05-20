<?php if (!isset($_GET['laRacine'])){  // pour pas repeter ca quand on fait retour aux salles ?>

  <br><br>
  <div class="col-md-8 offset-md-2" id="contenu">

<?php }?>

    <?php 
    foreach ($rooms as $room) { 
      $id = $room->getId(); ?>
      <a value="<?=$id?>" class="voirPostesSalle col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?=$room->getRoomName()?></h5>
          <small class="text-muted"><span class="badge badge-light"><?=$id?></span></small>
        </div>
        <p class="mb-1"><?=$room->getDescription()?></p>
      </a><?php
    } ?>

<?php if (!isset($_GET['laRacine'])){  // pour pas repeter ca quand on fait retour aux salles ?>
  </div>
<?php }?>
  
</br>

<script> // ajax 
$(document).ready(function(){
    $(".voirPostesSalle").click(function(){
        var id = $(this).attr("value");
        var racine = <?php echo json_encode($racine); ?>;
        $.ajax({url: "../PPE_GestSallesInfo_Laffi/traitement/affichagePostes.php/?id="+id+"&laRacine="+racine, success: function(result){
        $("#contenu").html(result);
        }});
    });
});  
</script>