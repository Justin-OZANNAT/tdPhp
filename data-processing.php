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
    echo '<br/><strong> '. $message1 . ' </strong><br/>
        
        <a href="index.php"> Revenir au formulaire<a/>';
    mail($to, $subject, $message1);
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
//    $dbLink = mysqli_connect(dbHost, dbLogin, dbPass)
//    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
//?>