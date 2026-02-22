<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = "login.txt";
        $data = json_decode(file_get_contents($file), true);
        foreach($data as $value){
            print_r($value);
            if($value["nazov"] === "A"){
                echo "Hello World! <br>";
            }
            else{
                echo "Hi! <br>";
            }
            foreach($value as $hodnota){
                echo $hodnota, "<br>";
            } 
        }    
    ?>
</body>
</html>