<?php 

    class Database{
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "users";
        public $conn;

        
        public function nadviazSpojenie(){
            $this->conn = NULL;
            try{
                $this->conn = new PDO("mysql:host=localhost; dbname=users",$this->username,$this->password);
            }
        catch(\PDOException $e){
            echo "connection failed".$e->getMessage();
            $this->null;
        }
        return $this->conn;
            }
    }

?>