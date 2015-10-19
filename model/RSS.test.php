<?php 
 	// Test de la classe RSS
      require_once('RSS.class.php');

      // Une instance de RSS
      $rss = new RSS('http://www.lemonde.fr/m-actu/rss_full.xml');

      // Charge le flux depuis le réseau
      $rss->update();

      // Affiche le titre
      echo $rss->titre()."\n";


      
      $nouvelles = $rss->nouvelles();


      //var_dump($nouvelles);

      ?>
      <h2> Choix de vues </h2>
      <form>
            <input type="submit" name="envoyer" value="image1">
            <input type="submit" name="envoyer" value="image2">            
      </form>     
      <?php

      if (isset($_GET["envoyer"])) {
            if ($_GET["envoyer"] == "image1") {
                  include("../view/uniquementImage.view.php");
            } elseif ($_GET["envoyer"] == "image2") {
                  include("../view/imageTitreDesc.view.php");
            }
      }


      
      

      

?>