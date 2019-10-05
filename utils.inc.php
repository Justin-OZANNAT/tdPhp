<?php
function start_page($title)
{
    echo '<!DOCTYPE html> <html lang="fr">
            <head>
                <title>' . PHP_EOL . $title . '</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           ' . //<link rel="icon" type="image" href=""/>
            '</head>
            <body>' . PHP_EOL;
};
function formulaire()
{
    echo '<form action="data-processing.php" method="post">
        <input name="id" type="text" placeholder="Identifiant"/>  <br>
        <input type="radio" name="sexe" id="Homme" value="Homme"/> Homme <br>
        <input type="radio" name="sexe" id="Femme" value="Femme"/> Femme <br>
        <input name="email" type="text" placeholder="E-mail"/>  <br>
        <input name="password" type="password" placeholder="Mot de Passe"/><br>
        <input name="verif" type="password" placeholder="verif MDP"/><br>
        <input type="text"  name="telephone" placeholder="telephone"/><br>
        <select name="pays">
            <option value ="France">France</option>
            <option value="Italie">Italie</option>
        </select><br>
        <input type="submit" name="action" value="Envoyer"/><br>
        </form>';
}
function end_page()
{
    echo '</body>' .PHP_EOL ;
    echo '</html>' .PHP_EOL ;
}
?>