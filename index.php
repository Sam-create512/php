<?php 
    echo "<h1>Nadpis</h1>";

    // komentar
    /*
    $a = 10;
    $b = "Ahoj!";
    echo "$a $b";*/
    /*
    $vek = 12;
    
    if($vek < 13){
        echo "Som dieťa!";
    } elseif($vek >= 13 && $vek < 18){
        echo "Som tínedžer!";
    } else{
        echo "Som dospelý!";
    }

    $message = ($vek >= 18) ? "Som dospelý!" : "Som dieťa!";

    echo $message;

    $vyherne_cislo = 5;
    $stastny_den = true;

    $tip = 5;

    if($vyherne_cislo == $tip && $stastny_den){
        echo "Vyhrali ste 5x!";
    } elseif($vyherne_cislo == $tip){
        echo "Vyhrali ste!";
    } elseif($tip + 1 == $vyherne_cislo || $tip - 1 == $vyherne_cislo){
        echo "Takmer ste vyhrali! Škoda!";
    } else{
        echo "Nevyšlo to :(";
    } */
   
    for($i = 0; $i < 9; $i++){
        echo "$i riadok"
    }
?>