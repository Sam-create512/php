    <?php
        $subor = "login.txt";
        if(file_exists($subor)){
            $data = json_decode(file_get_contents($subor), true);
            if(!is_array($data)) $data = [];
        }
        else{
            $data = [];
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style_find.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="home.php" class="btn btn-outline-danger tlacitko">Exit</a>
    </header>

    <div class=container>

        <div class="accordion" id="accordionExample">
            <?php foreach($data as $value){ 
                $collapseID = $value["id"] ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseID ?>" aria-expanded="false" aria-controls="<?= $collapseID ?>">
                            <?php echo $value["nazov"] ?>
                        </button>
                    </h2>
                    <div id="<?= $collapseID ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        
                            <form method="POST" action="find-script.php">
                                <input type="hidden" name="id" value=<?= $collapseID ?>>
                                <div class="row mb-3">
                                    <label for="inputHeslo" class="col-sm-3 col-form-label">Heslo</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputHeslo" name="heslo_zaznamu">
                                    </div>
                                </div>
                            <button type="submit" name="send_button"class="btn btn-primary">Odoslať</button>
                            </form>

                        </div>
                    </div>
                </div>
            <?php } ?>
                
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>