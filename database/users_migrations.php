<?php
include 'db.php';

    class Users_migrations extends Database {

        public function createTable()
        {
            $this->init();
            $this->conn->query("CREATE TABLE IF NOT EXISTS users (
                id int auto_increment primary key,
                name varchar(255) not null,
                email varchar(255) not null,
                password varchar(255) not null
            )");
        }
    }

?>