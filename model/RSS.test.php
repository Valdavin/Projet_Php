<?php 
 	// Test de la classe RSS
      require_once('RSS.class.php');

      // Une instance de RSS
      $rss = new RSS('http://www.lemonde.fr/m-actu/rss_full.xml');

      // Charge le flux depuis le réseau
      $rss->update();

      // Affiche le titre
      echo $rss->titre()."\n";


      // Il semblerais que nouvelles ne contienne qu'une seule "nouvelle" et non pas une liste de "nouvelle"
      $nouvelles = $rss->nouvelles();
      var_dump($nouvelles);
      echo "Swag"."\n";
       foreach ($nouvelles as $n) { 
       		var_dump($n->titre());
       }
      

?>