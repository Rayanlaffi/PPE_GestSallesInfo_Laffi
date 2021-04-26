<br><br>
  <div class="col-md-8 offset-md-2" id="contenu">
    <?php 

        foreach ($rooms as $room) { 
        $id = $room->getId();
        ?>
        
        <!-- <a href="?action=salles&id=<?=$id?>" class="col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start"> -->
        <a value="<?=$id?>" class="voirPostesSalle col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?=$room->getRoomName()?></h5>
          <small class="text-muted"><span class="badge badge-light"><?=$id?></span></small>
        </div>
        <p class="mb-1"><?=$room->getDescription()?></p>
        
        </a>
    <?php
        }
    ?>
  </div>
</br>

<script>
$(document).ready(function(){
    $(".voirPostesSalle").click(function(){
        var id = $(this).attr("value");
        $.ajax({url: "affichePoste.php/?id="+id, success: function(result){
        $("#contenu").html(result);
        }});
    });
});  
</script>