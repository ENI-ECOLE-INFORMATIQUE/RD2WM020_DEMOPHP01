<?php
//Création d'un tableau sans indice
$n[]='zéro';
$n[]='un';
$n[]='deux';
$n[]='trois';

var_dump($n);

$tab=['un','deux,trois',5=>'cing',8=>'Huit'];
var_dump($tab);

$tab2=array('un','deux,trois',5=>'cing',8=>'Huit');
var_dump($tab2);

$villesFrance = ['Paris','Lyon','Nantes','Rennes'];
$listesVillesFrance = implode("|",$villesFrance);
var_dump($listesVillesFrance);
$villesItalie = ['Rome','Venise'];

$villes=[$villesFrance,$villesItalie];
var_dump($villes);
echo "<ul>";
foreach ($villesFrance as $cle => $ville) {
    echo "<li>$cle - $ville</li>";
}
echo "</ul>";