<?php
header('Content-Type: application/json');

$user = array(
    "id" => 1,
    "name" => "Genesis",
    "email" => "genesis@example.com",
    "status" => "active"
);

echo json_encode($user);
?>