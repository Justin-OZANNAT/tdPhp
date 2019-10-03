<?php
    include 'utils.inc.php';
    $dbLink = mysqli_connect('mysql-justin-ozannat.alwaysdata.net', '191230', 'jojolasardine')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'justin-ozannat_bd')
    or die('Erreur dans la selection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT  login  FROM user';


    $login = $_POST['login'];
    $password = $_POST['password'];
    //$query = 'SELECT login FROM user ';
    if ($login == 'juju' && $password == 'lolo')
    {
        header('Location: page.php');
    }
    else
    {
        start_page('erreur');
        echo 'Mauvais mot de passe';
        end_page();
    }

?>
