
<?php
header('Content-Type: text/html; charset=UTF-8');

// Read incoming JSON data
$json = file_get_contents('php://input');

// Decode JSON into a PHP object
$data = json_decode($json);

// Display received values
if ($data !== null) {
    echo "Username: " . htmlspecialchars($data->username ?? '') . "<br>";
    echo "Password: " . htmlspecialchars($data->password ?? '');
} else {
    echo "No valid JSON data received.";
}
?>
