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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>appartement</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <header>
    <p>Veuillez Remplir Ce Formulaire </p>
  </header>
  <form method="_REQUEST" class="form-horizontal" action="valiapp.php">
    <div class="form-group">
      <label for="descript" class="col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="descript" name="descript">

      </div>
    </div>
    <div class="form-group">
      <label for="surface" class="col-sm-2 control-label">Surface</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="surface" name="surface" placeholder="surface">

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
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button> <button type="submit" class="btn btn-default" name="annuler">Reset</button>
      </div>
    </div>
  </form>
</body>

</html>