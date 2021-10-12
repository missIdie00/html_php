<?php require("header.php"); ?>
<h1>Se Connecter</h1>
<?php
session_start();
@$login = $_POST["login"];
@$pass = md5($_POST["pass"]);
@$valider = $_POST["valider"];
$message = "";
if (isset($valider)) {
  include("connexion.php");
  $sel = $cnx->prepare("select * from users where login=? and pass=? limit 1");
  $sel->execute(array($login, $pass));
  $tab = $sel->fetchAll();
  if (count($tab) > 0) {
    $_SESSION["prenomNom"] = ucfirst(strtolower($tab[0]["prenom"])) .
      " " . strtoupper($tab[0]["nom"]);
    $_SESSION["autoriser"] = "oui";
  } else
    $erreur = "Mauvais login ou mot de passe!";
  header("location:blockpage.php");
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestion des elections du Senegal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="one.css" rel="stylesheet">
</head>

<body>
  <form method="POST" action="">
    <div class="form-group">
      <label for="login" class="col-sm-2 control-label">login </label>
      <div class="col-sm-10">
        <input type="login" name="login" id="login" class="form-control" placeholder="votre password ">
      </div>
    </div>
    <div class="form-group">
      <label for="pass" class="col-sm-2 control-label">Mot de passe </label>
      <div class="col-sm-10">
        <input type="password" name="pass" id="pass" class="form-control" placeholder="votre password ">
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-default" name="valider">
        </div>
      </div>
  </form>
  <?php if (!empty($message)) { ?>
    <div id="message"><?php echo $message ?></div>
  <?php } ?>
  <?php require("footer.php"); ?>