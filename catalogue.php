<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>great</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="one4.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="cssB/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item" color="#734290">
                <a class="nav-link active" aria-current="page" href="?contenu=photoAp">Appartement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?    contenu=photoIm">Immeuble</a>
            </li>

        </ul>
        </div>
    </header>
    <?php
    if (isset($_REQUEST['contenu'])) {
        $contenu = $_REQUEST['contenu'];
        if ($contenu == 'photoIm') {
            include("photoIm.php");
        } elseif ($contenu == 'photoAp') {
            include("photoAp.php");
        } else {

            echo "page introuvable";
        }
    } ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>