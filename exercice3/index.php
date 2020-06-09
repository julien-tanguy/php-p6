<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e3p6</title>
    </head>
    <body>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Envoyer les paramétres</a>

    <p><?php 
    //isset = Cette fonction teste si une variable existe.
    //si les 2 paramétres sonts présent
    if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
        echo 'Vous étes en vacances du : ' . $_GET['startDate'] . ' aux ' . $_GET['endDate'];
    //si il manque un paramétre
    }else if (isset($_GET['startDate']) || isset($_GET['endDate'])) {
        if (isset($_GET['startDate'])) {
            echo 'Vos vacances débutent le : ' . $_GET['startDate'];
        }else {
            echo 'Vos vancances finissent le : ' . $_GET['endDate'];
        }
    }
    //si aucun paramétres n'est présent
    else {
        echo 'ERREURS';
    }
    ?></p>
    </body>
</html>