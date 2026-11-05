
<?php
// Receive the data, process it, and respond in JSON

header('Content-Type: application/json');

// Read the raw JSON sent by fetch()
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

// Get the name and clean it
$name = trim($data['name'] ?? '');

// Validate the name
if ($name === '') {
    http_response_code(400);

    echo json_encode([
        "status" => "error",
        "message" => "Name is required."
    ]);

    exit;
}

// Respond with JSON
echo json_encode([
    "status" => "success",
    "message" => "Welcome, " . htmlspecialchars($name) . "!"
]);
?>
