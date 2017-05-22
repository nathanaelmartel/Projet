<?php
require_once('_config.php');

$current_film_id = $_GET['id'];

$query = '';

$current_film_result = $pdo->query($query);
$current_film = $current_film_result->fetch();


?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet — [Nom du film]</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/tp4.css" type="text/css" />
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include('_header.php') ?>

    <div class="container">
      <article>
        <header>
          <h1>[Nom du film]</h1>

          <ol class="breadcrumb">
            <li><a href="">Accueil</a></li>
            <li class="active">[Nom du film]</li>
          </ol>

        </header>

        <div>
          [contenu du film]
        </div>

        <footer>
          <p>Publié le <span class="label label-default">[date article]</span> par <span class="label label-default">[auteur du film]</span></p>
        </footer>

      </article>

      <aside>
        <?php //require_once('_commentaires.php'); ?>
      </aside>
    </div>

    <?php include('_footer.php') ?>
  </body>
</html>
