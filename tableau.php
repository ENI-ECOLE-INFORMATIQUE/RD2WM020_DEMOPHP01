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

for ($i = 1; $i <= 63; $i++) {
    $t1[] = $i;
}
$t2[] = 0;
foreach ($t1 as $val) {
    $t2[] = $val / 10;
}

foreach ($t2 as $reel) {
    $t3[(string) $reel] = sin($reel);
}

echo '<table style="border-collapse:collapse"><tr><th style="border:1px solid black">x</th><th style="border:1px solid black">sin(x)</th></tr>';
foreach ($t3 as $x => $sinx) {
    echo '<tr><td style="border:1px solid black">' . $x . '</td><td style="border:1px solid black">' . $sinx . '</td></tr>';
}
echo '</table>';