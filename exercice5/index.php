<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e5p6</title>
    </head>
    <body>
    <a href="index.php?week=12">Envoyer les paramétres</a>

    <p><?php 
    //isset = Cette fonction teste si une variable existe.
    if (isset($_GET['week'])) {
        echo 'Le nombre de semaines est :' . $_GET['week'];
    }
    else {
        echo 'ERREURS, le paramétre n\'existe pas!';
    }
    ?></p>
    </body>
</html>