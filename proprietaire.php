<?php
if (isset($_REQUEST['valider'])) {
  extract($_REQUEST);
  define('dns', 'mysql:host=127.0.0.1;dbname=examen1;charset=utf8');
  define('user', 'root');
  define('pass', '');
  try {
    $cnx = new PDO(dns, user, pass);
  } catch (PDOException $e) {
    echo "ERREUR echec de la connexion" . $e->getMessage();
    exit();
  }

  $inser = "INSERT INTO proprietaire(idp,nomp,prenomp,naissp,lieup,genre,comptebank,fonction)
 values('','$nomp','$prenomp','$naissp','$lieup','$genre','$comptebank','$fonction')";
  $cnx->exec($inser);
}
?>

<!doctype html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>proprietaire</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <header>
    <p>Veuillez Remplir Ce Formulaire </p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>
  <form method="_REQUEST" class="form-horizontal">
    <div class="form-group">
      <label for="nomp" class="col-sm-2 control-label">Nom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nomp" name="nomp" placeholder="votre nom">

      </div>
    </div>
    <div class="form-group">
      <label for="prenomp" class="col-sm-2 control-label">Prenom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prenomp" name="prenomp" placeholder="votre prenom">

      </div>
    </div>
    <div class="form-group">
      <label for="naissp" class="col-sm-2 control-label">Date de naissance</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="naissp" name="naissp">
      </div>
    </div>
    <div class="form-group">
      <label for="lieup" class="col-sm-2 control-label">Lieu de naissance</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lieup" name="lieup" placeholder=" lieu de naissance">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <label for="genre">genre</label>
        <input type="checkbox" name="genre" id="genre"> M
        <input type="checkbox" name="genre" id="genre"> F

      </div>
    </div>
    <div class="form-group">
      <label for="comptebank" class="col-sm-2 control-label">Compte bancaire</label>
      <div class="col-sm-10">
        <input type="text" id="comptebank" name="comptebank" class="form-control" placeholder="votre compte bancaire">
      </div>
    </div>
    <div class="form-group">
      <label for="fonction" class="col-sm-2 control-label">Fonction</label>
      <div class="col-sm-10">
        <input type="text" id="fonction" name="fonction" class="form-control" placeholder="votre fonction">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="valider">Submit</button> <button type="submit" class="btn btn-default" name="annuler" onclick="window.history.go(-1)">Reset</button>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>