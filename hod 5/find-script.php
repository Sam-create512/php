<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $subor = "login.txt";
        $data = json_decode(file_get_contents($subor), true);
        print_r($_POST);
        foreach($data as $value){
            if($value["id"]===$_POST["id"] && $value["heslo"] === $_POST["heslo_zoznamu"]){
                echo "Hello world!";
            }
        }
    }
?>