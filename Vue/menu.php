
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
  <header>
    <a href="./?action=accueil" class="logo"> M2L</a>
    <ul>
      <li><a href="./?action=accueil">Accueil</a></li>
      <li><a href="./?action=salles">Salles</a></li>

      <?php if (isset($_SESSION['permission']) && $_SESSION['permission'] == 1){?>
      <li><a href="./?action=gestionPoste">Gestion des postes</a></li>	
      <?php } ?>

      <li><a href="./?action=contact">Contact</a></li>

      
      <?php if (!isset($_SESSION['id'])){?>
      <li><a href="./?action=connexion">Connexion</a></li>
      <?php }

      else{ ?>
      <li><a href="./?action=deconnexion">Déconnexion</a>
      <small class="text-muted"><span class="badge badge-light">Identifié en tant que <?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></span></small>
      </li>
      <?php } ?>

    </ul>
  </header>
  <section class="banner"></section>
  <script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>
</body>
 </html>
  
