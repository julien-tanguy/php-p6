<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e1p6</title>
    </head>
    <body>
    <a href="index.php?lastname=Nemare&firstname=Jean">Envoyer les paramétres</a>

    <p><?php 
    //isset = Cette fonction teste si une variable existe.
    //si les 2 paramétres sonts présent
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
        echo 'Bonjour, votre nom est : ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
    //si il manque un paramétre
    }else if (isset($_GET['lastname']) || isset($_GET['firstname'])) {
        if (isset($_GET['lastname'])) {
            echo 'Bonjour, votre nom est : ' . $_GET['lastname'];
        }else {
            echo 'Bonjour, votre prénom est : ' . $_GET['firstname'];
        }
    }
    //si aucun paramétres n'est présent
    else {
        echo 'ERREURS';
    }
    ?></p>
    </body>
</html>