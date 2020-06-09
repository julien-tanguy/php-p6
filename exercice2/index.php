<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e2p6</title>
    </head>
    <body>
    <a href="index.php?lastname=Nemare&firstname=Jean">Envoyer les paramétres</a>

    <p><?php 
    //isset = Cette fonction teste si une variable existe.
    //si les 2 paramétres sonts présent
    if (isset($_GET['age'])) {
        echo 'Votre âge est : ' . $_GET['age'];
    }
    else {
        echo 'ERREURS, le paramétre n\'existe pas!';
    }
    ?></p>
    </body>
</html>