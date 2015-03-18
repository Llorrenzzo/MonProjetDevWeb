<?php

// initialiser la bdd
$server ="localhost";
$dbname="blogv1";
$user="blogv1";
$pwd="blogv1";

//fonction procédurale : se connecte avec un link (obsolète) mais on va utiliser une connexion objet PDO

//PDO
$dsn='mysql:dbname='.$dbname.'; host='.$server.';charset=utf8';
$db = new PDO ($dsn, $user, $pwd);
//parametrer des attribut d'une variable interne de PDO
// ici on lui demande de mettre les resultats objet sous forme de tableau associatif
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //c'est une constante, attribut statique de classe

//detruire les autres variables (inutiles et permet de les cacher) sauf la $db qui est encapsulée dans l'objet
unset($server, $dbname, $user, $dsn, $pwd);
 
