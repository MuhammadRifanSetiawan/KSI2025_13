<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = file_get_contents("php://input");
    file_put_contents("webhook.log", $payload . "\n\n", FILE_APPEND);
    http_response_code(200);
    echo "Webhook received";
    exit;
}

echo "Hello from server!";
echo "Muhammad Agus Rizal";
echo "M. Rifan Setiawan";
echo "Nabila Eka Putri";
echo "Nova Cahyani Ms";

