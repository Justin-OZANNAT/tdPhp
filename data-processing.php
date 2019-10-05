<?php
include 'utils.inc.php';
$action = $_POST['action'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];
$sexe = $_POST['sexe'];
$telephone = $_POST['telephone'];
$verif = $_POST['verif'];
$pays = $_POST['pays'];
$to = $email;
$subject = 'Identifiants';

$dbLink = mysqli_connect('mysql-justin-ozannat.alwaysdata.net', '191230', 'jojolasardine')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink, 'justin-ozannat_bd')
or die('Erreur dans la selection de la base : ' . mysqli_error($dbLink));

if($action == 'Envoyer')
{
    echo '<br/><strong>Bouton géré !</strong><br/>';
    $message1 = 'Voici vos identifiants d\'inscription : ' . PHP_EOL .
        'Identifiant : ' . $id . PHP_EOL .
        'Email : ' . $email . PHP_EOL .
        'Mot de passe :' . $password . PHP_EOL ;
    echo '<br/><strong> '. $message1 . ' </strong><br/><a href="index.php"> Revenir au formulaire<a/>';
    mail($to, $subject, $message1);
    $query = 'INSERT INTO user (email, password, sexe, telephone, pays ) VALUES (\'' . $email . '\', \''
        . $password . '\' , \'' . $sexe . '\', \'' . $telephone . '\' , \'' . $pays . '\' )';

    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur dans requête<br/>';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }


    /*while($dbRow = mysqli_fetch_assoc($dbResult))
    {
        echo $dbRow['id'] . '<br/>';
        echo $dbRow['email'] . '<br/>';
        echo $dbRow['date'] . '<br/>';
        echo '<br/><br/>';
        echo date('d.m.Y', strtotime($dbRow['date']));
    }*/

}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

?>