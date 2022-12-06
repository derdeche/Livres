<h1>POO-LIVRES</h1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur.<br>
un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur</p>

<h2>Résultat</h2>

<?php


require_once "livre.php";
require_once "auteur.php";

$auteur1 = new Auteur("King", "Stephen");
$livre1 = new livre ("Ca", 1986, 1138, 20, $auteur1);
$livre2 = new livre ("Simetierre", 1983, 374, 15, $auteur1);
$livre3 = new livre ("Le Fléau", 1978, 823, 14, $auteur1);
$livre4 = new livre ("Shining", 1977, 447, 16, $auteur1);
$auteur1->afficherbibliographie();
//echo $auteur1."<br>"; //like call __tostring()
//echo $livre1."<br>"; //like call __tostring()
//echo $livre2."<br>";
//echo $livre3."<br>";
//echo $livre4."<br>";




$auteur2 = new auteur("Agatha","Christie");
$livre1 = new livre ("Mort sur le Nil", 1937, 1512, 20,$auteur2);
$livre2 = new livre ("Le Cheval pâle", 1980, 1489, 15,$auteur2);
$livre3 = new livre ("La Fête du potiron", 1970, 2001, 14,$auteur2);
$livre4 = new livre ("La Maison biscornue", 1950, 1246, 16,$auteur2);
$auteur2->afficherbibliographie();

//echo $auteur2."<br>"; //like call __tostring()
//echo $livre1."<br>"; //like call __tostring()
//echo $livre2."<br>";
//echo $livre3."<br>";
//echo $livre4."<br>";

