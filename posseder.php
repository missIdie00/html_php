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

$selection = "SELECT * FROM immeuble";
$execut = $cnx->query($selection);
$donnees = $execut->fetchAll(PDO::FETCH_ASSOC);

$selection = "SELECT * FROM proprietaire";
$execut = $cnx->query($selection);
$donnees = $execut->fetchAll(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>posseder</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <header>
    <p>Veuillez Remplir Ce Formulaire </p>
  </header>
  <form method="_REQUEST" class="form-horizontal" action="valipos.php">
    <div class="form-group">
      <label for="dated" class="col-sm-2 control-label">Date de début</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="dated" name="dated">

      </div>
    </div>
    <div class="form-group">
      <label for="datef" class="col-sm-2 control-label">Date de fin</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="datef" name="datef">

      </div>
    </div>
    <div class="form-group">
      <label for="coutEstimation" class="col-sm-2 control-label">Coût Estimé</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="coutEstimation" name="coutEstimation" placeholder="Le montant">

      </div>
    </div>
    <div class="form-group">
      <label for="idp" class="col-sm-2 control-label">Idp</label>
      <div class="col-sm-10">
        <select class="input" name="idp" class="form-control" id="idp">
          <?php foreach ($donnees as $value) :; ?>
            <option value="<?php echo $value['idp']; ?>"><?php echo $value['nomp']; ?></option>
          <?php endforeach; ?>
        </select></br>
      </div>
    </div>
    <div class="form-group">
      <label for="idim" class="col-sm-2 control-label">Idim</label>
      <div class="col-sm-10">
        <select class="input" name="idim" class="form-control" id="idim">
          <?php foreach ($donnees as $value) :; ?>
            <option value="<?php echo $value['idim']; ?>"><?php echo $value['nomim']; ?></option>
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