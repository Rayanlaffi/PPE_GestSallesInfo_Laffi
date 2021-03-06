<!-- Affichage des postes par salle -->

<a class="col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?=$nomSalle?></h5>
        <small class="text-muted"><span class="badge badge-light"><?=$id?></span></small>
    </div>
    <p class="mb-1"><?=$description?></p>
    <p class="mb-1">La salle <?=$nomSalle?> contient <?=$capacite?> places et contient <?=$nbPoste?> postes: </p>
    <?php foreach ($postes as $poste) { ?> 
    <a value="<?=$poste->getnPoste()?>" class="infosPoste col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start"> 
        <p class="text-center mb-1"><?=$poste->getNomPoste()?></p>
    </a>  
    <?php } ?>
</a>

<!-- <a href="?action=salles" class="col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
    <button type="button" class="retourSalles col-md-6 offset-md-3 btn btn-secondary btn-sm">Retour aux salles</button>
</a> -->
<a class="col-md-6 offset-md-3 list-group-item list-group-item-action flex-column align-items-start">
    <button type="button" class="retourSalles col-md-6 offset-md-3 btn btn-secondary btn-sm">Retour aux salles</button>
</a>
<!-- fin des Affichages des postes par salle -->

<script>
$(document).ready(function(){
    $(".infosPoste").click(function(){
        var idPoste = $(this).attr("value");
        var racine = <?php echo json_encode($racine); ?>;
        var id = <?php echo json_encode($id); ?>;
        $.ajax({url: "../PPE_GestSallesInfo_Laffi/traitement/informationsPoste.php?id=<?=$id?>&idPoste="+idPoste+"&laRacine="+racine, success: function(result){
        $("#contenu").html(result);
        }});
    });
});  

$(document).ready(function(){
    $(".retourSalles").click(function(){
        var racine = <?php echo json_encode($racine); ?>;
        $.ajax({url: "../PPE_GestSallesInfo_Laffi/Controleur/afficheSalles.php?laRacine="+racine, success: function(result){
        $("#contenu").html(result);
        }});
    });
}); 
</script>