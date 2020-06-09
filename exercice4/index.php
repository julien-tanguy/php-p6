<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e4p6</title>
    </head>
    <body>
    <a href="index.php?language=PHP&server=LAMP">Envoyer les paramétres</a>

    <p><?php 
    //isset = Cette fonction teste si une variable existe.
    //si les 2 paramétres sonts présent
    if (isset($_GET['language']) && isset($_GET['server'])) {
        echo 'Vous utilisé le language : ' . $_GET['language'] . ' sur le serveur ' . $_GET['server'];
    //si il manque un paramétre
    }else if (isset($_GET['language']) || isset($_GET['server'])) {
        if (isset($_GET['language'])) {
            echo 'Vous utilisé le language : ' . $_GET['language'];
        }else {
            echo 'Vos étes sur le serveur : ' . $_GET['server'];
        }
    }
    //si aucun paramétres n'est présent
    else {
        echo 'ERREURS';
    }
    ?></p>
    </body>
</html>