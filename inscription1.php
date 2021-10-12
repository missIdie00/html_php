<?php
session_start();
@$nom = $_POST['nom'];
@$prenom = $_POST['prenom'];
@$login = $_POST['login'];
@$pass = $_POST['pass'];
@$repass = $_POST['repass'];
@$valider = $_POST['valider'];
$message = '';
if (isset($valider)) {
    if (empty($nom)) $message = "<li>Nom ivalide</li>";
    if (empty($prenom)) $message = "<li>prenom ivalide</li>";
    if (empty($login)) $message = "<li>login ivalide</li>";
    if (empty($pass)) $message = "<li>pass ivalide</li>";
    if ($pass != $repass) $message = "<li>pass identique</li>";
    if (empty($message)) {
        include("connexion.php");
        $res = $cnx->prepare("select id from users where login=? limit 1");
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->execute(array($login));
        $tab = $res->fetchAll();
        if (count($tab) > 0)
            $message = "<li>login existe deja</li>";
        else {

            $ins = "insert into users(id,date, nom,prenom,pass,login)
             values('',now(),'$nom','$prenom',md5('$pass'),'$login')";
            $cnx->exec($ins);

            header("location:login.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des elections du Senegal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="one.css" rel="stylesheet">
</head>

<body>
    <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <label for="nom" class="col-sm-2 control-label">nom </label>
            <div class="col-sm-10">
                <input type="text" name="nom" id="nom" class="form-control" placeholder="votre identifiant ">
            </div>
        </div>
        <div class="form-group">
            <label for="prenom" class="col-sm-2 control-label">prenom </label>
            <div class="col-sm-10">
                <input type="prenom" name="prenom" id="prenom" class="form-control" placeholder="votre password ">
            </div>
        </div>
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
                <label for="pass" class="col-sm-2 control-label">Conformer Mot de passe </label>
                <div class="col-sm-10">
                    <input type="password" name="repass" id="repass" class="form-control" placeholder="votre password ">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="valider">Submit</button>
                </div>
            </div>

    </form>
    <?php if (!empty($message)) { ?>
        <div id="message"><?php echo $message ?></div>
    <?php } ?>
</body>

</html>