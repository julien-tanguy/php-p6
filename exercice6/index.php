<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e4p6</title>
    </head>
    <body>
    <a href="index.php?building=12&room=101">Envoyer les paramétres</a>

    <p><?php 
    //isset = Cette fonction teste si une variable existe.
    //si les 2 paramétres sonts présent
    if (isset($_GET['building']) && isset($_GET['room'])) {
        echo 'Votre immeuble est le numéro : ' . $_GET['building'] . ' et la chambre numéro : ' . $_GET['room'];
    //si il manque un paramétre
    }else if (isset($_GET['building']) || isset($_GET['room'])) {
        if (isset($_GET['building'])) {
            echo 'Votre immeuble est le numéro : ' . $_GET['building'];
        }else {
            echo 'Votre chambre est la numéro : ' . $_GET['room'];
        }
    }
    //si aucun paramétres n'est présent
    else {
        echo 'ERREURS';
    }
    ?></p>
    </body>
</html>