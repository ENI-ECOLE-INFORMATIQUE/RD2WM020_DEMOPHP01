<?php
echo '<h1>Hello World !</h1>';
//Déclarer une variable
$nom = 'Julie'; //Nom de l'utilisateur
$titrePage = 'Titre de la page ...';
$aujourdhui=date("d/m/Y");//date du jour
$heure=date("H:i:s");//heure

echo "Bonjour <b>$nom</b> !<br>";
//Affichage de la date et de l'heure.
echo "Nous sommes le $aujourdhui; il est $heure.<br>";

echo 'Bonjour <b>$nom</b> !<br>';
echo 'Bonjour <b>'.$nom.'</b> !<br>';
$nom="élodie";

var_dump($nom);
var_dump($heure);

//Assignation par Valeur
$prenom1="Maxime";
$prenom2=$prenom1;
$prenom1="Vincent";

echo '$prenom1='.$prenom1. ' et $prenom2='.$prenom2.' <br>';


//Assignation par référence (On utilise le meme pointeur mémoire).
$prenom1="Maxime";
$prenom2=&$prenom1;
$prenom1="Robert";

echo '$prenom1='.$prenom1. ' et $prenom2='.$prenom2.' <br>';

//Variables dynamiques
$uneVariable = 10;
$nomVariable = 'uneVariable';

echo '<code>$uneVariable</code> = '.$uneVariable.'<br>';
echo '<code>$nomVariable</code> = '.$nomVariable.'<br>';
echo '<code>$$nomVariable</code> = '.$$nomVariable.'<br>';

//Fonctions utiles
var_dump($uneVariable);
echo '<p>isset(): La variable <code>$uneVariable</code> est elle définie ? <p>';
var_dump(isset($uneVariable));

echo '<p>empty(): La variable <code>$uneVariable</code> est elle vide ? <p>';
var_dump(empty($uneVariable));

echo '<p>unset(): La variable <code>$uneVariable</code> est supprimée ! <p>';
unset($uneVariable);

echo '<p>isset(): La variable <code>$uneVariable</code> est elle définie ? <p>';
var_dump(isset($uneVariable));
//Constante
define('CONSTANTE','PHP en version '.phpversion());
echo CONSTANTE.'<br>';

const AUTRE_CONSTANTE='PHP 8';
echo AUTRE_CONSTANTE.'<br>';









