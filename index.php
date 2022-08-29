<?php
require ('./classes/connexion_bdd.php');
require ('./classes/auteur.class.php');

$database = new DatabaseHandler();
$db = $database->connectionToDatabase();
$citation = new Citation($db);

// $citation->createCitation();

// if(isset($_POST["submit"])){
//     $citation->auteur = htmlspecialchars($_POST["auteur"]);
//     $citation ->citation = htmlspecialchars($_POST["citation"]); 

// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eval-PHP</title>
</head>
<body>
    <h1>Citation</h1>
    <form method="POST">
        <fieldset>
            <label>Auteur
                <input type="text" name="auteur">
            </label>
            <label>Citez ici svp
                <textarea name="citation" cols="30" rows="5"></textarea>
            </label>
            <input type="submit" name="submit" value="Envoyer">
        </fieldset>
    </form>
</body>
</html>
