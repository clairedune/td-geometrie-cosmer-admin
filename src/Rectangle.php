<?php
// !!!!!! DECLARATION    //
// !!!!!! CLASSE


class Rectangle{

	// abscisse du coin en haut a gauche du rectangle
	// dans le repere orthonormé lié à l'ecran
	// INT $x
	public $x = 0;

	// ordonnée du coin en haut a gauche du rectangle
	// dans le repere orthonormé lié à l'ecran
	// INT $x
	public $y = 0;

	// couleur du trait en hexadicemal RGB
	public $couleur = '000000'; 

	// largeur
	// INT $l
	public $largeur = 1;

	// hauteur
	// INT $h
	public $hauteur = 1;

	// constructeur avec parametres
	// obligation de donner la position et la dimension
	public function __construct($posX,$posY,$dimL,$dimH){
		echo "<br>Creation d'un rectangle";
		$this->x = $posX;
 		$this->y = $posY;
 		$this->largeur = $dimL;
 		$this->hauteur = $dimH;
	}

	public function __toString(){
		return "<hr>C'est un rectangle !".
			"<br> largeur : ".$this->largeur.
			"<br> hauteur : ".$this->hauteur."<hr>";
	}

	public function perimetre(){
		return ($this->largeur+$this->hauteur)*2;
	}

	public function aire(){
		return ($this->largeur*$this->hauteur);
	}











	
}



