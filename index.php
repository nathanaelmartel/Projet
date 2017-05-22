<?php require_once('_config.php') ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/tp4.css" type="text/css" />
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include('_header.php') ?>

    <div class="container">

      <?php
        // Requête pour récupérer tous les articles de la catégorie
        $query = 'SELECT …';
        //$articles = $pdo->query($query);
      ?>
            <div class="row">
              <?php //foreach ($articles as $article): ?>
                <div class="col-md-4 col-sm-6">
                  <article>
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h2 class="panel-title">[titre de l'article 1]</h2>
                        <span class="label label-default">[auteur de l'article 1]</span>
                      </div>
                      <div class="panel-body">
                        [Résumé de l'article 1]
                        <p class="text-right">
                          <a class="btn btn-primary" href="article.php?id=[article id]" role="button" title="[titre de l'article 1]">
                            Lire la suite
                          </a>
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
              <?php //endforeach ?>
            </div>
    </div>

    <?php include('_footer.php') ?>
  </body>
</html>
