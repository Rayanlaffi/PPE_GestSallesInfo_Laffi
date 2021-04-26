
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/Style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <a href="./?action=accueil" class="logo"> M2L</a>
    <ul>
      <li><a href="./?action=accueil">Accueil</a></li>
      <li><a href="./?action=salles">Salles</a></li>
      <li><a href="./?action=gestionPoste">Gestion des postes</a></li>	

      <li><a href="./?action=contact">Contact</a></li>

      <?php session_start();?>
      <?php if (!isset($_SESSION['id'])){?>
      <li><a href="./?action=connexion">Connexion</a></li>
      <?php }else{ ?>
      <li><a href="deconnexion.php">Déconnexion</a></li>
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
  
