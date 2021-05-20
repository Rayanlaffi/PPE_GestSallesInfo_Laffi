<div class="container"><br>
  <?php  if (isset($_GET['connexion']) && $_GET['connexion'] == 0) { ?>
    <div class="alert alert-danger" role="alert">Mot de passe ou e-mail incorrect.</div>
  
  <?php } ?>
  <div class="card">
    <article class="card-body">
    <h4 class="card-title mb-4 mt-1">Se connecter</h4>
      <form action="" method="post">

        <div class="form-group">
          <label>Votre e-mail</label>
            <input name="mail" class="form-control" placeholder="Email" type="email">
        </div> 

        <div class="form-group">
          <a class="float-right" href="#">Mot de passe oublié ?</a>
          <label>Votre mot de passe</label>
            <input name="mdp"  class="form-control" placeholder="******" type="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Se connecter  </button>
        </div>                                                         
      </form>
    </article>
  </div>
</div>