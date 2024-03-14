<?php
include 'database/db.php';

    class Users extends Database {

        public function getAll()
        {
            $this->init();
            $get = $this->conn->query("SELECT * FROM users");
            $show = $get->fetch_all(MYSQLI_ASSOC);

            return $show;
        }
    }