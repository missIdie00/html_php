<!DOCTYPE html>
<html>

<head>
    <title>liste</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="one2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=List of proprietaire">Liste des Proprietaires</a></li>
                <li><a class="dropdown-item" href="?contenu=List of client">Liste des Clients</a></li>
                <li><a class="dropdown-item" href="?contenu=List of immeuble">Liste des Immeubles</a></li>
                <li><a class="dropdown-item" href="?contenu=List of appartement">Liste des Appartements</a></li>
                <li><a class="dropdown-item" href="?contenu=List of locataire">Liste des Locations</a></li>
                <li><a class="dropdown-item" href="?contenu=List of possesseur">Lites des possessions</a></li>
                <li><a class="dropdown-item" href="?contenu=List of contrat">Liste des Contrats</a></li>
            </ul>
        </li>

    </ul>

    <?php
    if (isset($_REQUEST['contenu'])) {
        $contenu = $_REQUEST['contenu'];
        if ($contenu == 'List of proprietaire') {
            include("tabprop.php");
        } elseif ($contenu == 'List of client') {
            include("tabcl.php");
        } elseif ($contenu == 'List of immeuble') {
            include('tabim.php');
        } elseif ($contenu == 'List of appartement') {
            include('tabap.php');
        } elseif ($contenu == 'List of louer') {
            include('tablouer.php');
        } elseif ($contenu == 'List of posseder') {
            include('tabpos.php');
        } elseif ($contenu == 'List of contrat') {
            include('tabcont.php');
        } else {
            echo 'la page rechercher n\'existe pas';
        }
    }

    ?>
</body>

</html>