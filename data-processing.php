<?php
include 'utils.inc.php';
$action = $_POST['action'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];
$verif = $_POST['verif'];
$to = 'jozannat13@gmail.com';
$subject = 'Identifiants';
if($action == 'mailer')
{
    echo '<br/><strong>Bouton géré !</strong><br/>';
    $message1 = 'Voici vos identifiants d\'inscription : ' . PHP_EOL .
        'Identifiant : ' . $id . PHP_EOL .
        'Email : ' . $email . PHP_EOL .
        'Mot de passe :' . $password . PHP_EOL ;
    echo '<br/><strong> '. $message1 . ' </strong><br/><a href="index.php"> Revenir au formulaire<a/>';
    mail($to, $subject, $message1);
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
$today = date('Y-m-d');
$query = 'INSERT INTO user (date, email ...) VALUES (\'' . $today . '\', \'' . $email . '\')';
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
?>