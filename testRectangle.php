<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS



	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Rectangle.php");

	// instanciation
	$r1 = new Rectangle(0,0,4,5);
 	$r2 = new Rectangle(100,200,1,2);
 	$r3 = $r2; // ATTENTION CE N'EST PAS UNE COPIE
 	$r4 = $r2; // ATTENTION CE N'EST PAS UNE COPIE

 	// modification des 
 	//attributs de $r2
 	$r2->x = 34;
 	$r2->y = 54;

 	// ATTENTION r3 et r4 sont 
 	//d'autres noms pour
 	// designer l'objet r2.
 	$r4->y = 10000;

	// voir ce que contient $r
	var_dump($r1);
	var_dump($r2);
	var_dump($r3);
	var_dump($r4);


	// appelle la methode 
	//__toString()
	echo $r1;
    
    $r5 = new Rectangle(0,0,1,2);
    echo $r5;
	echo "<br>A= ".$r5->aire();
	echo "<br>P= ".$r5->perimetre();





?>