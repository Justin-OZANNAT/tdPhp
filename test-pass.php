<?php
    include 'login.php';
    $login = $_POST('login');
    $password = $_POST('password');
    if ($login == $_POST('login') && $password == $_POST('password'))
    {
        header('Location : page.php');
    }
    else
    {
        start_page(erreur);
    }

?>
