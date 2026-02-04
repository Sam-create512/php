<?php
$znamky = [1,4,5,1,4,5,5,5,1,1];
/*
$priemer = 0;
for($i = 0; $i <10; $i++){
    $priemer += $znamky[$i];
}*/

$priemer = array_sum($znamky) / count($znamky);
echo $priemer, "<br>";
/*print_r($znamky);*/

echo $znamky[3];

$znamky[6] = 100;
print_r($znamky);


echo "<br>";

$znamky[]=88;
print_r($znamky);

echo "<br>";

$asoc_pole=[
    "meno" => "Jano",
    "priezvisko" => "Velky",
    "vek" => 20
];
echo $asoc_pole["meno"], "<br>";



?>