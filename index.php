<?php

    include "database.php";
    include "get_all.php";
    $db = new Database();
    $spojenie = $db->nadviazSpojenie();
    get_all();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>