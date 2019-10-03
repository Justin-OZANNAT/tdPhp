<?php
    include 'login.php';
    $login = $_POST('login');
    $password = $_POST('password');
    //$query = 'SELECT login FROM user ';
    if ($login == $_POST['login'])
    {
        header('Location : page.php');
    }
    else
    {
        start_page(erreur);
    }

?>
