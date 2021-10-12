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

$selection = "SELECT * FROM appartement";
$execut = $cnx->query($selection);
$donnes = $execut->fetchAll(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>louer</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <header>
    <p>Veuillez Remplir Ce Formulaire </p>
  </header>
  <form method="_REQUEST" class="form-horizontal" action="valiloue.php">
    <div class="form-group">
      <label for="datest" class="col-sm-2 control-label">Date de début</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="datest" name="datest">

      </div>
    </div>
    <div class="form-group">
      <label for="datend" class="col-sm-2 control-label">Date de fin</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="datend" name="datend">

      </div>
    </div>
    <div class="form-group">
      <label for="caution" class="col-sm-2 control-label">Caution</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="caution" name="caution" placeholder="la caution">

      </div>
    </div>
    <div class="form-group">
      <label for="mensualite" class="col-sm-2 control-label">Mensualite</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="mensualite" name="mensualite" placeholder="le prix">
      </div>
    </div>
    <div class="form-group">
      <label for="idcl" class="col-sm-2 control-label">Idp</label>
      <div class="col-sm-10">
        <select class="input" name="idcl" class="form-control" id="idcl">
          <?php foreach ($donnees as $value) :; ?>
            <option value="<?php echo $value['idcl']; ?>"><?php echo $value['idcl']; ?></option>
          <?php endforeach; ?>
        </select></br>
      </div>
    </div>
    <div class="form-group">
      <label for="idap" class="col-sm-2 control-label">Idap</label>
      <div class="col-sm-10">
        <select class="input" name="idap" class="form-control" id="idap">
          <?php foreach ($donnes as $value) :; ?>
            <option value="<?php echo $value['idap']; ?>"><?php echo $value['idap']; ?></option>
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