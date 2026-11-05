<?php
$student = array(
    "name" => "Genesis",
    "age" => 21,
    "course" => "IT"
);

$json = json_encode($student);

echo $json;
?>