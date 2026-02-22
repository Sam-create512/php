<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){

    /* Citanie zo suboru */
        $subor = "login.txt";

        if(file_exists($subor)){
            $data = json_decode(file_get_contents($subor), true);
            if(!is_array($data)) $data = [];
        }
        else{
            $data = [];
        }
    /* */

    /* Overenie vyplnenia formulara */
        if ($_POST["nazov_zaznamu"] == "" || 
            $_POST["textarea_zaznam"] == "" || 
            $_POST["heslo_zaznamu"] == "" ||
            $_POST["heslo_zaznamu2"] == ""){
            header("Location:create.php");
            exit();
        }    

        foreach($data as $value){
                if($value["nazov"] === $_POST["nazov_zaznamu"]){
                    header("Location:create.php");
                    exit();
                }
            }
    /* */

    /* Overenie spravnosti hesla */
        if($_POST["heslo_zaznamu"] === $_POST["heslo_zaznamu2"]){
            $registracne_udaje = ["nazov" => $_POST["nazov_zaznamu"], "heslo" => $_POST["heslo_zaznamu"] , "zaznam" => $_POST["textarea_zaznam"]];
            $data[] = $registracne_udaje;
        }
        else{
            header("Location:create.php");
            exit();
        }            
    /* */

    /* Zapis do suboru */
        file_put_contents($subor,json_encode($data,JSON_PRETTY_PRINT));
        header("Location:create.php");
        exit();
    /* */
    }
?>