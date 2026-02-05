
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
$pole = [
    "Rambo 1" => ["zaner" => "akcne",
                 "hl_postava" => "Sylvester Stallone",
                 "rok_vydania" => 1982
                ],
    "Rocky 1" => ["zaner" => "drama",
                 "hl_postava" => "Sylvester Stallone",
                 "rok_vydania" => 1976],
    "Forest Gump" => ["zaner" => "drama",
                      "hl_postava" => "Tom Hanks",
                      "rok_vydania" => 1994],
        
    "Kurier" => ["zaner" => "akcne",
                 "hl_postava" => "Jason Statham",
                  "rok_vydania" => 2002]
               ];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
        }
        form{
            height:150px;
            width:230px;
        }
    </style>
</head>
<body>
    <form method="post">
        <div>
            <label for="nazov">Názov</label>
            <input type="text" name="nazov">
        </div>
        
        <div>
            <label for="akcne">Akčné</label>
            <input type="radio" name="radijko"id="akcne" value="akcne" checked><br>
            <label for="drama">Dráma</label>
            <input type="radio" name="radijko" id="drama" value="drama"><br>
            <label for="komedia">Komédia</label>
            <input type="radio" name="radijko" id="komedia" value= "komedia"><br>
        </div>
        
        <button type="submit" class="send_button">Send</button>
    </form>
        <?php
        $kontrol = FALSE;
        $zaner = $_POST["radijko"];
        foreach($pole as $key => $value){
            if($key === $_POST["nazov"] & $value["zaner"] === $zaner){
                echo $value["zaner"], "<br>";
                echo $value["hl_postava"], "<br>";
                echo $value["rok_vydania"], "<br>";
                $kontrol = TRUE;   
            } 
        }

        // if($value["zaner"] === $_POST["radijko"]){
        //     echo "aaaaaaaaa";
        // }
        
        // echo $_POST["radijko"];
        if($kontrol === FALSE){
            echo "Film nie je v databáze";
        }
        ?>
</body>
</html>