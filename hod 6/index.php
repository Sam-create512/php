<?php 

include "Kniha.php";
include "Database.php";

$spojenie = new Database();
$db = $spojenie->nadviazSpojenie();

print_r($_POST);
if(!$db){
    die(" Databaza nie je pripojena");
}
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])){

    if($_POST["action"] === "delete"){

    
    $sql = "DELETE FROM knihy WHERE id = :id";

    $stmt = $db->prepare($sql);

    $stmt->execute([
        ":id" => $_POST["kniha_id"]
    ]);

    header("Location:index.php");
    exit();
    }
    elseif($_POST["action"] === "create"){
        $sql = "INSERT INTO knihy(nazov,autor,rok_vydania,stav) VALUES(:nazov,:autor,:rok_vydania,:stav)";
        $stmt = $db->prepare($sql);


        // $stmt = $db->prepare($sql);
        // var_dump($stmt);
        $stmt->execute([
             ":nazov" => $_POST["nazov"],
             ":autor" => $_POST["autor"],
             ":rok_vydania" => $_POST["rok_vydania"],
             ":stav" => $_POST["stav"]
            ]);
    
        header("Location:index.php");
        exit();        
    }
    // elseif($_POST["action"] === "update"){
    //     header("Location:update.php");
    //     exit(); 
    // }
    if($_POST["action"] === "update"){
        $sql = "UPDATE knihy SET nazov=:nazov,autor=:autor,rok_vydania=:rok_vydania,stav=:stav WHERE id=:id";

        $stmt = $db->prepare($sql);
    
        $stmt->execute([
            "nazov" => $_POST["nazov"],
            "autor" => $_POST["autor"],
            "rok_vydania" => $_POST["rok_vydania"],
            "stav" => $_POST["stav"],
            ":id" => $_POST["kniha_id"]

        ]);        
    }
}

$sql = "SELECT * FROM knihy";
$stmt = $db->query($sql);




while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $kniha = null;

    $kniha = new Kniha($row["nazov"], $row["autor"], (int)$row["rok_vydania"], (int)$row["stav"]);

    if($kniha){
        $kniha->setId($row["id"]);
        $kniznica[] = $kniha;
    }
};

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
    <h1>Kniznica</h1>
    <br>                   
        <form action="index.php" method="POST">

            <label for="nazov">Nazov</label>
            <input type="text" name="nazov">

            <label for="autor">Autor</label>
            <input type="text" name="autor">

            <label for="rok_vydania">Rok vydania</label>
            <input type="number" min="0" max="2026" name="rok_vydania">

            <label for="stav">Stav</label>

            <label for="">1</label>
            <input type="radio" name="stav" value="1">

            <label for="">0</label>
            <input type="radio" name="stav" value="0">

            <input type="hidden" name="action" value="create">
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    <br>
    <table border="1">
        <tr>
            <th>Nazov</th>
            <th>Autor</th>
            <th>Rok vydania</th>
            <th>Stav</th>
            <th>Action</th>
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
                <td>
                    <form action="index.php" method="POST">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="kniha_id" value="<?= $kniha->getId();?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                     
                </td>  
                <td>
                    <form action="update.php" method="POST">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="kniha_id" value="<?= $kniha->getId();?>">
                        <button type="submit" class="btn btn-success">Update</button>                           
                    </form>
                </td>
            
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
