<?php 
 	// Test de la classe RSS
      require_once('RSS.class.php');

      // Une instance de RSS
      $rss = new RSS();
      $rss->createRSS('http://www.lemonde.fr/m-actu/rss_full.xml');
	//$rss = new RSS('http://feeds.feedburner.com/Koreus-articles');
      // Charge le flux depuis le réseau
      $rss->update();

      // Affiche le titre
     // echo $rss->titre()."\n";


      
      $nouvelles = $rss->nouvelles();


      //var_dump($nouvelles);

      ?>
      <h2> Choix de vues </h2>
      <form>
            <input type="submit" name="envoyer" value="image1">
            <input type="submit" name="envoyer" value="image2">
            <input type="submit" name="envoyer" value="Flux url">
            <br>
            Nouvelle par ID :
            <input type="submit" name="envoyer" value="id">
            <input type="number" name="numID" min="0" max="1000" value="0">          
      </form>     
      <?php

      if (isset($_GET["envoyer"])) {
            if ($_GET["envoyer"] == "image1") {
                  include("../view/uniquementImage.view.php");
            } elseif ($_GET["envoyer"] == "image2") {
                  include("../view/imageTitreDesc.view.php");
            } elseif ($_GET["envoyer"] == "Flux url") {
                  include("../controler/afficher_flux.ctrl.php");
            } elseif ($_GET["envoyer"] == "id") {
                  $id = $_GET["numID"];
                  include("../controler/afficher_nouvelles.ctrl.php");

            }
      }


      
      

      

?>