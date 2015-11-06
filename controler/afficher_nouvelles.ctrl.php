<?php


//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////
// Récupération des informations de la query string
if (isset($id)) {
	require_once('../model/RSS.class.php');
	require_once('../model/DAO.class.php');
	require_once('../model/Nouvelle.class.php');
	$dao=new DAO();
  	$rss = new RSS();
  	$rss = $dao->readRSSfromID($id);
  	if ($rss != null) {
  		$rss->update();
  		$nouvelles = $rss->nouvelles();
  	} else {
  		$error = "afficher_nouvelles.ctrl.php : ID introuvable";
  	}
  	
} else {
  $error = "afficher_nouvelles.ctrl.php : Pas d'ID";
}


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

// Calculs : rien à faire


//////////////////////////////////////////////////////////////////////////////
// PARTIE SELECTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

// Choix de la vue en fonction de l'état des variables
if (!isset($error)) {
	include("../view/afficher_nouvelles.view.php");	
} else {
	$data['error'] = $error;
	include("../view/error.view.php");
}




?>