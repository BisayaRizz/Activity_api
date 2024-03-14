<?php 
include 'users.php';

$users = new Users();
$data = $users->getAll();

echo json_encode($data); 

?>