<?php

class Cercle{

	// abscisse du centre du cercle dans 
	// le repere orthonormee 
	// lie à l'ecran
	// INT $x
	public $x;

	// ordonnee du centre du cercle dans le repère 
	// orthonormee lié à l'écran
	// INT $y
	public $y;

	// couleur du trait de contour
	// exprimée en RGB
	// STRING $couleur
	public $couleur;

	// rayon du cercle
	// INT $rayon
	public $rayon;

	//---------------------------//
	//constructeur de la classe cercle
	// c'est un constructeur par defaut car il
	// n'a pas de parametres
	public function __construct(){
			echo "<br>Creation d'un cercle";
			$this -> x = 10;
			$this -> y = 20;
			$this -> couleur = '000000';
			$this -> rayon = 1;
	}


    // methode magique pour pouvoir utiliser la fonction "echo" sur les 
    // instances de la classe
	public function __toString(){
		return "<br><br>(x,y) : (".$this->x.",".$this->y.")".
			   "<br>couleur: ".$this->couleur.
				"<br>rayon : ".$this->rayon; 	
	}

   
    // on calcule l'aire PI*R^2
	public function aire(){
		return floor(M_PI*$this->rayon*$this->rayon);
	}

    // on calcule le perimetre 2*PI*R
	public function perimetre(){
		return floor(2*M_PI*$this->rayon);
	}

}



