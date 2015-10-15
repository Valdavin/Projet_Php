<?php

	$doc = new DOMDocument;
	$doc->load('http://www.lemonde.fr/m-actu/rss_full.xml');
	$titreNodeList = $doc->getElementsByTagName('title');
	  $titrePrinc = $titreNodeList->item(0)->textContent;
      printf("<h1>%s</h1> </br>",$titrePrinc);
	$docNodeList =  $doc->getElementsByTagName('item');
	foreach ($docNodeList as $nouvelle) {    	
		$title = $nouvelle->getElementsByTagName('title')->item(0)->textContent;
   	 printf("%s </br>",$title);
	}
?>