<h1>POO-LIVRES</h1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur.<br>
un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur</p>

<h2>Résultat</h2>

<?php


/*require_once "livre.php";*/
require_once "auteur.php";

$auteur1 = new auteur("King", "Stephen");
/*$livre1 = new livre ("Ca", 1986, 1138, 20);*/
/*$livre2 = new livre ("Simetierre", 1983, 374, 15);*/
/*$livre3 = new livre ("Le Fléau", 1978, 823, 14);*/
/*$livre4 = new livre ("Shining", 1977, 447, 16);*/

echo $auteur1->tostring()."<br>";
/*echo $livres1->tostring()."<br>";*/
/*echo $livre2->tostring()."<br>";*/
/*echo $livre3->tostring()."<br>";*/
/*echo $livre4->tostring()."<br>";*/

