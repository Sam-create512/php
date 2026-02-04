<?php

$farby = array("červená", "modrá", "biela");
echo $farby[1] , "<br>";

$cisla =array(
    array(1,2,3),
    array(4,5,6)
);
echo $cisla[0][0], "<br>";

$ziaci = ["jozko", "šaňko","kubo"];
foreach($ziaci as $value){
    echo $value, "<br>";
}

$pocitac = array(
    "zakladna_doska" => "Asus",
    "procesor" => "Intel Core I6"
);
echo $pocitac["zakladna_doska"], "<br>";

unset($pocitac["zakladna_doska"]);
$pocitac["zakladna_doska"] = "MSI";
echo $pocitac["zakladna_doska"];