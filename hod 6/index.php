<?php 

include "Kniha.php";
include "Database.php";

$spojenie = new Database();
$db = $spojenie->nadviazSpojenie();
var_dump($db);
if(!$db){
    die(" Databaza nie je pripojena");
}

$kniznica = [];

$svet = new Kniha("Svet", "Janko Hruska", 1897, 1);
$kniznica[] = $svet;

$auto = new Kniha("Auto", "Stano Mak", 2000, 1);
$kniznica[] = $auto;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kniznica</h1>
    <br>
    <table border="1">
        <tr>
            <th>Nazov</th>
            <th>Autor</th>
            <th>Rok vydania</th>
            <th>Stav</th>
        </tr>

        <?php foreach($kniznica as $kniha):?>
            <tr>
                <td>
                    <?= $kniha->getNazov() ?>
                </td>
                <td>
                    <?= $kniha->getAutor() ?>
                </td>
                <td>
                    <?= $kniha->getRok_vydania() ?>
                </td>
                <td>
                    <?= $kniha->getStav() ?>
                </td>                
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
