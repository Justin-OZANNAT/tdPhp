<?php
include 'utils.inc.php';
start_page("Justin OZANNAT");



echo '<body>
    <header>
      <h2>Site Web</h2>
      
    </header>
    
    <section>
      <nav>
        <ul>
          <li><a href="#">Justin</a></li>
          <li><a href="#">Moi</a></li>
          <li><a href="#">ET ENCORE MOI</a></li>
        </ul>
      </nav>
      
      <article>
        <h1>Justin</h1>
        <p>C\'est vraiment une ville incroyable il faut y aller absolument parce que j\'aime beaucoup Londres</p>
      </article>
    </section>
    <footer>
      <p>Footer</p>
      ';  // Correspond à l’adresse IP de celui qui visualise la page.
    echo getenv('REMOTE_ADDR'); echo '<br>';
    // Correspond à l’adresse IP du serveur.
    echo getenv('HTTP_HOST'); echo '<br>';
    // Correspond au logiciel serveur Web utilisé.
    echo getenv('SERVER_SOFTWARE');
    echo'</footer>
    </body>';



//phpinfo();
formulaire();
end_page()
?>