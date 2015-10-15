<?php
	class nouvelle {
		private $titre			//	Titre de la nouvelle
		private $description	//	Description de la nouvelle
		private $link			//	URL de la nouvelle
		private $date			// 	Date de publication
		private $image			//	URL (ou pas ?) de l'image


        // Contructeur
        // AH FAIRE APRES


        // Getters
        function titre() {
        	return $this->titre;
        }

        function description() {
        	return $this->description;
        }

        function link() {
        	return $this->link;
        }

        function date() {
        	return $this->date;
        }

        function image() {
        	return $this->image;
        }

        function update(DOMElement $item) {

        $nodeList = $item->getElementsByTagName('title');
        $this->titre    = $nodeList->item(0)->textContent;

        $nodeList = $item->getElementsByTagName('pubDate');
        $this->date  = $nodeList->item(0)->textContent;

        $nodeList = $item->getElementsByTagName('description');
        $this->description  = $nodeList->item(0)->textContent;

        $nodeList = $item->getElementsByTagName('enclosure');
        $this->image  = $nodeList->item(0)->textContent;

        // A FINIR

      	}

	}

?>