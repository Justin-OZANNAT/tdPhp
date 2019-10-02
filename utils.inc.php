<?php
function start_page($title)
{
    echo '<!DOCTYPE html> <html lang="fr">
            <head>
                <title>' . PHP_EOL . $title . '</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            </head>
            <body>' . PHP_EOL;
};
function formulaire()
{
    echo '<form action="data-processing.php" method="post">
        <input name="id" type="text" placeholder="Identifiant"/>  <br>
        <input type="radio" name="Sexe" id="Homme" value="Homme"/> Homme <br>
        <input type="radio" name="Sexe" id="Femme" value="Femme"/> Femme <br>
        <input name="email" type="text" placeholder="E-mail"/>  <br>
        <input name="password" type="password" placeholder="Mot de Passe"/><br>
        <input name="verif" type="password" placeholder="Verif MDP"/><br>
        <input type="text" placeholder="Télephone"/><br>
        <select> name="Pays"
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