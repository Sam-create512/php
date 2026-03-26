<?php
print_r($_POST);
include "Kniha.php";
include "Database.php";

$spojenie = new Database();
$db = $spojenie->nadviazSpojenie();


if(!$db){
    die(" Databaza nie je pripojena");
}


$sql = "SELECT * FROM knihy WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute([
    ":id" => $_POST["kniha_id"]
]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($row);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">

        <label for="">Nazov</label>
        <input type="text" name="nazov" value="<?= $row["nazov"] ?>">

        <label for="">Autor</label>
        <input type="text" name="autor" value="<?= $row["autor"] ?>">

        <label for="">Rok vydania</label>
        <input type="number" min="0" max="2030" name="rok_vydania" value="<?= $row["rok_vydania"] ?>">

        <label for="">Stav</label>
        <input type="text" name="stav" value="<?= $row["stav"] ?>">

        <input type="hidden" name="action" value="update">
        <input type="hidden" name="kniha_id" value="<?= $row["id"]?>">
        <button type="submit" class="btn btn-success">Update</button>
        
    </form>
</body>
</html>
