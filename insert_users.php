<?php
include 'database/db.php'; 

    class Insert extends Database 
    {
        public function insertUsers() 
        {
            $this->init();
            $insert = $this->conn->query("INSERT INTO users(name, email, password)
            VALUES ('Riz Inghug', 'inghugriz@gmail.com', 'password123')");
        }
    } 

?>