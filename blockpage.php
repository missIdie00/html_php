

<!doctype html>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>great</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="one2.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="cssB/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script lang="javascript">
    /**
     * Nous reprenons notre exemple de formulaire de connexion
     *
     */
    $("#container").load("inscription1.php", {});
  </script>
</head>

<body>
  <div class="container" id="container">
    <div class="container-fluid">
      <header class="H1">
        <nav class="navbar navbar-expand-lg ">
          <div id="main">
            <a style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</a>
          </div>

          <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
              document.getElementById("main").style.marginLeft = "0px";
            }

            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.getElementById("main").style.marginLeft = "0";
            }
          </script>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </nav>
      </header>
      <aside>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a class="nav-link active" href="?    contenu=acceuil">Acceuil</a>
          <a class="nav-link active" href="?    contenu=proprietaire">Proprietaire</a>
          <a class="nav-link active" href="?
          contenu=client">Client</a>
          <a class="nav-link active" href="?contenu=immeuble">Immeuble</a>
          <a class="nav-link active" href="?contenu=appartement">Appartement</a>
          <a class="nav-link active" href="?contenu=louer">Louer</a>
          <a class="nav-link active" href="?contenu=posseder">Posseder</a>
          <a class="nav-link active" href="?contenu=contrat">Contrat</a>
          <a class="nav-link active" href="?contenu=liste">Tableaux des Données</a>

        </div>

    </div>
  </div>

  </aside>
  <div class="container">
    <main class="grid">
      <article>
        <div>
          <h1>12</h1>
          <span>Proprietaires</span>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" color="#734290">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </div>
      </article>
      <article>
        <div>
          <h1>60</h1>
          <span>Clients</span>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16" color="#734290">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
          </svg>
        </div>
      </article>
      <article>
        <div>
          <h1>150</h1>
          <span>Appartements</span>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" color="#734290">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg>
        </div>
      </article>
      <article>
        <div>
          <h1>15</h1>
          <span>Immeubles</span>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16" color="#734290">
            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
          </svg>
        </div>
      </article>

    </main>

  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6" style="background-color:#734290;">
        <a class="btn btn-default" href="catalogue.php" style="background-color:#734290;color:#f5f2f7;font-size:20px;" role=" button">Visitez notre catalogue</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg> </a>
      </div>
    </div>

    <?php
    if (isset($_REQUEST['contenu'])) {
      $contenu = $_REQUEST['contenu'];
      if ($contenu == 'proprietaire') {
        include("proprietaire.php");
      } elseif ($contenu == 'client') {
        include("client.php");
      } elseif ($contenu == 'immeuble') {
        include('immeuble.php');
      } elseif ($contenu == 'appartement') {
        include('appartement.php');
      } elseif ($contenu == 'louer') {
        include('louer.php');
      } elseif ($contenu == 'posseder') {
        include('posseder.php');
      } elseif ($contenu == 'contrat') {
        include('contrat.php');
      } elseif ($contenu == 'liste') {
        include('listblock.php');
      } else {
        echo 'la page rechercher n\'existe pas';
      }
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>