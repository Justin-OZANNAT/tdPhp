<?php
include 'utils.inc.php';
start_page("PAGE WEB");
// Correspond à l’adresse IP de celui qui visualise la page.
echo getenv('REMOTE_ADDR'); echo '<br>';
// Correspond à l’adresse IP du serveur.
echo getenv('HTTP_HOST'); echo '<br>';
// Correspond au logiciel serveur Web utilisé.
echo getenv('SERVER_SOFTWARE');
//phpinfo();
formulaire();
end_page()
?>