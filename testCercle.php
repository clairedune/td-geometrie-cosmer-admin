<?php

	// C'est un fichier de tests "unitaires"
	// il sert a tester toutes les méthodes 
    // de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Cercle.php");


	// INSTANCIATION
	$c = new Cercle();
	echo $c;

	// on modifie la position du cercle
	// on a le droit car c'est un parametre
	// public
	$c->x = 200 ;

	// on modifie son rayon
	// on a le droit car c'est un parametre
	// public
	$c->rayon = 4;

 	// on affiche les attribut
	echo $c;

	// calcule de l'aire
	$a = $c->aire();	
	echo "<br><br>l'aire est ".$a;

	// calcule du perimetre
	$p = $c->perimetre();	
	echo "<br><br>le perimetre est ".$p;

?>