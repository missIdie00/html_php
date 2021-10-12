<?php
if (isset($_REQUEST['valider'])) {
  extract($_REQUEST);
  define('dns', 'mysql:host=localhost;dbname=examen1;charset=utf8');
  define('user', 'root');
  define('pass', '');
  try {
    $cnx = new PDO(dns, user, pass);
  } catch (PDOException $e) {
    echo "ERREUR echec de la connexion" . $e->getMessage();
    exit();
  }

  $inser = "INSERT INTO immeuble(idim,nomim,superficie) values('','$nomim','$superficie')";
  $cnx->exec($inser);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>immeuble</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <header>
    <p>Veuillez Remplir Ce Formulaire </p>
  </header>
  <form method="_REQUEST" class="form-horizontal">
    <div class="form-group">
      <label for="nomim" class="col-sm-2 control-label">Nom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nomim" name="nomim" placeholder="nom de l'immeuble ">

      </div>
    </div>
    <div class="form-group">
      <label for="superficie" class="col-sm-2 control-label">Superficie</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="superficie" name="superficie" placeholder="superficie">

      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="valider">Submit</button>
      </div>
    </div>
  </form>
</body>

</html>