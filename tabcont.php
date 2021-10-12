<?php
define('dns', 'mysql:host=127.0.0.1;dbname=examen1; charset=UTF8');
define('user', 'root');
define('pass', '');

try {
    $connexion = new PDO(dns, user, pass);
} catch (PDOException $e) {

    echo "Erreur echec de la connexion" . $e->getMessage();
    exit();
}

$selection = "SELECT * FROM contrat";
$execut = $connexion->query($selection);
$donn = $execut->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>List of appartement</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Numero </th>
                <th scope="col">Designation</th>
                <th scope="col">Identifiant cclient</th>
                <th scope="col">Identifiant proprietaire </th>
                <th scope="col">Modification</th>
                <th scope="col">Suppression</th>
            </tr>
        </thead>

        <?php foreach ($donn as  $value) :; ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $value['idc']; ?></th>
                    <td> <?php echo $value['dési']; ?></td>
                    <td> <?php echo $value['idcl']; ?></td>
                    <td> <?php echo $value['idp']; ?></td>
                    <td><a href="modifiercont.php? numa=<?php echo $value['idap'] ?>" class="btn btn-success">modifier</a></td>
                    <td><a href="supprimercont.php? num=<?php echo $value['idap'] ?>" class="btn btn-danger">supprimer</a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
    </table>

    <a href="?form=liste" class="btn btn-dark" align="center">Retour</a>
    <?php

    if (isset($_REQUEST['form'])) {

        $form = $_REQUEST['form'];
        if ($form == "liste") {
            header("Location:accueil.php?form=liste");
        }
    }

    ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>