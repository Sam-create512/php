<?php
/*
echo ($_GET["cislo1"] + $_GET["cislo2"]), "<br>";
echo ($_GET["cislo1"] - $_GET["cislo2"]), "<br>";
echo ($_GET["cislo1"] * $_GET["cislo2"]), "<br>";
echo ($_GET["cislo1"] / $_GET["cislo2"]), "<br>";
*/
print_r($_GET);
echo "<br>";


if($_GET["operacia"] === "/"){
    if($_GET["cislo2"] !=== 0){
        echo ($_GET["cislo1"] / $_GET["cislo2"]), "<br>";
    }
    else{
        echo "Zadali ste nespravnu hodnotu";
    }
}
elseif($_GET["operacia"] === "*"){
    echo ($_GET["cislo1"] * $_GET["cislo2"]), "<br>";
}
elseif($_GET["operacia"] === "-"){
    echo ($_GET["cislo1"] - $_GET["cislo2"]), "<br>";
}
elseif($_GET["operacia"] === "+"){
    echo ($_GET["cislo1"] + $_GET["cislo2"]), "<br>";
}
else{
    echo "a";
}
?>
