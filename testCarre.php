<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS
	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Carre.php");

	// INSTANCIATION d'un objet du type
	// Carre, une instance de la classe
	// Carre. "New" appelle la methode
	// construct
	$c = new Carre(3);

    // cherchons ce qu'est $c
    /*
    echo "<br>";
	echo gettype($c);
	echo "<br>";
	echo get_class($c);
	var_dump($c);
	*/
	echo $c;

    // cette ligne n'est autorisé
    // que si l'attribut x est public
	// $c->x = 34;
	$c->setX(34);

	echo $c;

	echo "<br> Aire : ".$c->aire();  
    echo "<br> Perimetre : ".$c->perimetre();
















?>