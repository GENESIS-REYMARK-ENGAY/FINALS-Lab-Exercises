<?php
$json = '{"name":"Genesis","age":21,"email":"genesis@example.com"}';

$object = json_decode($json);

$array = json_decode($json, true);

echo "Object: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br>";

echo "Array: " . $array["name"] . "<br>";
echo "Array Email: " . $array["email"];
?>
