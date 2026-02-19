<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        if ($_POST["nazov_zaznamu"] == "" || $_POST["textarea_zaznam"] == "" || $_POST["heslo_zaznamu"] == "" || $_POST["heslo_zaznamu2"] == ""){
            header("Location:create.php");
            exit();
        }        
        else{
            $nazov = $_POST["nazov_zaznamu"];
            $text = $_POST["textarea_zaznam"];
            $zaznam_heslo = $_POST["heslo_zaznamu"]; 
            $zaznam_heslo2 = $_POST["heslo_zaznamu2"];

            $text = str_replace(["\r","\n"],"*/+*-/+",$text);

                if($zaznam_heslo === $zaznam_heslo2){
                    $registracne_udaje = ["nazov" => $nazov, "zaznam_heslo" => $zaznam_heslo , "textarea_zaznam" => $text];
                }
                else{
                    header("Location:create.php");
                    exit();
                }            

        }
        
        $subor = "login.txt";

        file_put_contents($subor,implode("|",$registracne_udaje)."\n", FILE_APPEND);
        header("Location:create.php");
        exit();
    }
?>