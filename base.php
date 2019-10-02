<?php
    $dblink = mysqli_connect(mysql-justin-ozannat.alwaysdata.net, 191230, jojolasardine)
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dblink, justin-ozannat_bd)
        or die('Erreur dans la selection de la base : ' . mysqli_error($dblink));
    $query = 'SELECT id, email, date FROM user';

    if (!($dbResult = mysqli_query($dblink, $query)))
    {
        echo 'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dblink) . '<br/>';
        //Affiche la requete envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }

    while($dbRow = mysqli_fetch_assoc($dbResult))
    {
        echo $dbRow['id'] . '<br/>';
        echo $dbRow['email'] . '<br/>';
        echo $dbRow['date'] . '<br/>';
        echo '<br/><br/>';
        echo date('d.m.Y', strtotime($dbRow['date']));
    }

?>