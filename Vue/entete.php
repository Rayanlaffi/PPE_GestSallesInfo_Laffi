
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $titre ?></title>


    <!-- <link href="bib/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="bib/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="bib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bib/js/fonctions.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>


    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->

    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</header>

<body onload="session(30, 5, '?action=deconnexion')">

    <?php include 'menu.php'?>
    
    
<script>
function rappelSession(minutes)
{
   var msg='Votre session expirera dans '+minutes+' minute';
   if(minutes>1) msg+='s';
   msg+='.\nVoulez-vous recharger la page pour éviter la déconnexion automatique ?';
 
   if(confirm(msg)) location.reload();
}
 

function expirationSession(url)
{
   alert('Votre session a expiré !\nVous êtes actuellement déconnecté.\nVeuillez vous reconnecter en remettant votre Login et Mot de passe.');
   location.href=url;
}

function session(expiration, rappel, redirection)
{
   // affichage du rappel
   var chronoRappel=setTimeout('rappelSession('+rappel+')', (expiration-rappel)*60*1000);
 
   // une fois le rappel affiché, on avertit uniquement de l'expiration
   var chronoExpiration=setTimeout('expirationSession(\''+redirection+'\')', expiration*60*1000);
}

</script>    