<?php 
        // Test de la classe DAO
        require_once('RSS.class.php');
        require_once('DAO.class.php');

        // Test si l'URL existe dans la BD
        $url = 'http://www.lemonde.fr/m-actu/rss_full.xml';
        $dao=new DAO();
        $rss = $dao->readRSSfromURL($url);
        if ($rss == NULL) {
          echo $url." n'est pas connu\n";
          echo "On l'ajoute ... \n";
          $rss = $dao->createRSS($url);

        }
        var_dump($rss);
        $dao->updateRSS($rss);
        var_dump($rss);
        // Mise à jour du flux
        $rss->update();
        //var_dump($rss); 
?>