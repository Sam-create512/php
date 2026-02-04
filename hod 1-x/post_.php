<?php
// echo $_POST["cislo1"];
// echo $_POST["cislo2"];
// echo $_POST["operacia"];
// echo ($_POST["cislo1"] )
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_POST["operacia"] === "/"){
        if($_POST["cislo2"] != 0){
            echo ($_POST["cislo1"] / $_POST["cislo2"]), "<br>";
        }
        else{
            echo "Zadali ste nespravnu hodnotu";
        }
    }
    elseif($_POST["operacia"] === "*"){
        echo ($_POST["cislo1"] * $_POST["cislo2"]), "<br>";
    }
    elseif($_POST["operacia"] === "-"){
        echo ($_POST["cislo1"] - $_POST["cislo2"]), "<br>";
    }
    elseif($_POST["operacia"] === "+"){
        echo ($_POST["cislo1"] + $_POST["cislo2"]), "<br>";
    }
}
// print_r($_SERVER)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        <form method="post" class="Form_">
            <div class="row mb-3">
                <label for="inputCislo1" class="col-sm-3 col-form-label">Číslo 1:</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" id="inputCislo1" name="cislo1">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputCislo2" class="col-sm-3 col-form-label">Číslo 2:</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" id="inputCislo2" name="cislo2">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputselect" class="col-sm-3 col-form-label">Operácia:</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="operacia">
                        <option selected>Vyberte</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        </select>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
