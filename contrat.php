<?php

define('dns', 'mysql:host=localhost;dbname=examen1;charset=utf8');
define('user', 'root');
define('pass', '');
try {
  $cnx = new PDO(dns, user, pass);
} catch (PDOException $e) {
  echo "ERREUR echec de la connexion" . $e->getMessage();
  exit();
}

$selection = "SELECT * FROM client";
$execut = $cnx->query($selection);
$donnees = $execut->fetchAll(PDO::FETCH_ASSOC);

$selection = "SELECT * FROM proprietaire";
$execut = $cnx->query($selection);
$donnes = $execut->fetchAll(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contrat</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <header>
    <p>Veuillez Remplir Ce Formulaire </p>
  </header>
  <form method="_REQUEST" class="form-horizontal" action="valicont.php">
    <div class="form-group">
      <label for="desi" class="col-sm-2 control-label">Désignation</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="desi" name="desi" placeholder="designation">

      </div>
    </div>
    <div class="form-group">
      <label for="idcl" class="col-sm-2 control-label">Idcl</label>
      <div class="col-sm-10">
        <select class="input" name="idcl" class="form-control" id="idcl">
          <?php foreach ($donnees as $value) :; ?>
            <option value="<?php echo $value['idcl']; ?>"><?php echo $value['nomcl']; ?></option>
          <?php endforeach; ?>
        </select></br>
      </div>
    </div>
    <div class="form-group">
      <label for="idp" class="col-sm-2 control-label">Idp</label>
      <div class="col-sm-10">
        <select class="input" name="idp" class="form-control" id="idp">
          <?php foreach ($donnes as $value) :; ?>
            <option value="<?php echo $value['idp']; ?>"><?php echo $value['nomp']; ?></option>
          <?php endforeach; ?>
        </select></br>
      </div>
    </div>

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="valider">Submit</button> <button type="submit" class="btn btn-default" name="annuler">Reset</button>
    </div>
    </div>
  </form>
</body>

</html>