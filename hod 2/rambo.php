<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
$pole = [
    "Rambo1" => ["zaner" => "akčne",
                 "hl_postava" => "Sylvester Stallone",
                 "rok_vydania" => 1982
                ],
    "Rocky1" => ["zaner" => "drama",
                 "hl_postava" => "Sylvester Stallone",
                 "rok_vydania" => 1976],
    "Forest_Gump" => ["zaner" => "drama",
                      "hl_postava" => "Tom Hanks",
                      "rok_vydania" => 1994]
        ];
// print_r($pole);

foreach($pole as $value){
    echo $value;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="nazov">Názov</label>
            <input type="text" name="nazov">
        </div>
        <button type="submit" class="send_button">Send</button>
    </form>
</body>
</html>