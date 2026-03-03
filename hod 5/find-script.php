<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $subor = "login.txt";
        $data = json_decode(file_get_contents($subor), true); 
        foreach($data as $value){
            if($value["id"]==$_POST["id"] && $value["heslo"] === $_POST["heslo_zaznamu"]){
                $nazov = $value["nazov"];
                $zaznam = $value["zaznam"];
                break; 
            }
            else{
                $nazov = "Error";
                $zaznam = "Zlé heslo!";
            }
        } ?>         
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
            <link rel="stylesheet" href="style_find.css">
            <title><?= $nazov ?></title>
        </head>
        <body>
            <header>
                <a href="home.php" class="btn btn-outline-danger tlacitko">Exit</a>
            </header>          
            <div> <?= $zaznam ?> </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>     
        </body>
        </html>

    <?php } ?>
