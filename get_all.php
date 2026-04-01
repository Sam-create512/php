<?php 
    include "database.php";
    include "users.php"
    $db = new Database();
    $spojenie = $db->nadviazSpojenie();

    public function get_all(){
        $sql = "SELECT * FROM users";
        $stmt = $spojenie->query($sql);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            print_r($row);
        }
    }

?>