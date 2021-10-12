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

   $inser = "INSERT INTO client(idcl,nomcl,prenomcl,naisscl,lieucl,genre) values('','$nomcl','$prenomcl','$naisscl','$lieucl','$genre')";
   $cnx->exec($inser);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>client</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="one.css" rel="stylesheet">
</head>

<body>
   <header>
      <p>Veuillez Remplir Ce Formulaire </p>
   </header>
   <form method="_REQUEST" class="form-horizontal">
      <div class="form-group">
         <label for="nomcl" class="col-sm-2 control-label">Nom</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="nomcl" name="nomcl" placeholder="votre nom">

         </div>
      </div>
      <div class="form-group">
         <label for="prenomcl" class="col-sm-2 control-label">Prenom</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="prenomcl" name="prenomcl" placeholder="votre prenom">

         </div>
      </div>
      <div class="form-group">
         <label for="naisscl" class="col-sm-2 control-label">Date de naissance</label>
         <div class="col-sm-10">
            <input type="date" class="form-control" id="naisscl" name="naisscl">
         </div>
         <label for="lieucl" class="col-sm-2 control-label">Lieu de naissance</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="lieucl" name="lieucl" placeholder="lieu de naissance">
         </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <label for="genre">genre</label>
               <input type="checkbox" name="genre" id="genre"> M
               <input type="checkbox" name="genre" id="genre"> F

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