<?php


//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////
/*if (isset($_GET['envoyer'])) {
  $choix = $_GET['envoyer'];
} else {
  // C'est une erreur : on doit toujours avoir un nom
  $error = "afficher_flux.ctrl : le string envoyer s'est perdu";
}*/

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

// Calculs : rien à faire


//////////////////////////////////////////////////////////////////////////////
// PARTIE SELECTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

// Choix de la vue en fonction de l'état des variables
if (!isset($error)) {
	/*switch $envoyer {
		case "vue1" :
			include("../view/uniquementImage.view.php");
			break;
		case "vue2" :
			include("../view/imageTitreDesc.view.php");
			break;
		case "vue3" :
			include("../view/affichage_flux.view.php");
			break;
		default : 
			$error  = "afficher_flux.ctrl : Mauvais choix de vue"
			$data['error'] = $error;
	  		// On charge la vue
	  		include("../view/error.view.php");
	}*/
	include("../view/affichage_flux.view.php");
	
} else {
	$data['error'] = $error;
	include("../view/error.view.php");
}




?>