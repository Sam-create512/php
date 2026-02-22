<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Create</title>
</head>
<body>
    <header>
        <a href="home.php" class="btn btn-outline-danger tlacitko">Exit</a>
    </header>
    <main>
        

        <form method="POST" action="script.php">
        
            <div class="row mb-3">
                <label for="inputNazov" class="col-sm-3 col-form-label">Názov záznamu</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputNazov" name="nazov_zaznamu">
                </div>
            </div>
        
            <div class="textarea_div">
                <div class="col-11">
                    <textarea class="form-control" id="inputTextarea" name="textarea_zaznam"></textarea>
                </div>
            </div>
            
            <br>

            <div class="row mb-3">
                <label for="inputHeslo" class="col-sm-3 col-form-label">Heslo</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputHeslo" name="heslo_zaznamu">
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="inputHeslo2" class="col-sm-3 col-form-label">Potvrďte heslo</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputHeslo2" name="heslo_zaznamu2">
                </div>
            </div>

            <button type="submit" name="send_button"class="btn btn-primary">Odoslať</button>
            
        </form>    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </main>
</body>
</html>