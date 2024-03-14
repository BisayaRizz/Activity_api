<?php
include 'database/users_migrations.php';

$table = new Users_migrations();
$data = $table->createTable();

?>