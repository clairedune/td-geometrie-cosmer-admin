<?php
// !!!!!! DECLARATION    //
// !!!!!! CLASSE
class Carre{

	// abscisse du centre du cercle dans 
	// le repere orthonormee 
	// lie à l'ecran
	// INT $x
	private  $x = 0;

	// ordonnee du centre du cercle dans le repère 
	// orthonormee lié à l'écran
	// INT $y
	private $y = 0;

	// couleur du trait de contour
	// exprimée en RGB
	// STRING $couleur
	private $couleur = "000000";

	// cote du carre
	// INT $cote
	private $cote = 1 ;

	//----------------------------------//
	// METHODES 
	//----------------------------------//

	// le constructeur __construct est une
	// "methode magique" de php
	// elle est automatiquement appelée par
	// 3le mot clé new
	public function __construct($a){
		echo "Création d'un carré de cote ".$a;
		$this->cote = $a; 
	}

 	// Creation de la methode __toString()
 	// pour pouvoir utiliser echo
 	public function __toString(){
 		$text = "<hr> Carre ".
 				"<br> cote :".$this->cote.
 				"<br> (x,y): (".$this->x.','.$this->y.')'.
 				"<br> couleur : ".$this->couleur."<hr>";
 		return $text;
 	}

 	// Modifieurs
 	public function setX($a){
 		$this->x = $a;
 	}
 	public function setY($a){
 		$this->y = $a;
 	}
 	public function setCote($a){
 		$this->cote = $a;
 	}
 	public function setCouleur($a){
 		$this->couleur = $a;
 	}

 	//Accesseurs
 	public function getX(){
 		return $this->x;
 	}
 	public function getY(){
 		return $this->y;
 	}
 	public function getCote(){
 		return $this->cote;
 	}
 	public function getCouleur(){
 		return $this->couleur;
 	}

    // calcule l'aire d'un carre
    // \return : int aire
    public function aire(){
     	return $this->cote*$this->cote;
     }
    
    // calcule le perimetre d'un carre
    // \return : int perimetre
    public function perimetre(){
     	return 4*$this->cote;
     }

	/*
	public function __construct(){
		echo "Création d'un carré de cote non defini";
	}*/
}



