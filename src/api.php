<?php

include "framework/framework.php";

try {
    $config = Framework\Config::getInstanse();
    $path = $API->getApiClass($config->getEnv('MAIN_TEMPLATE'));
    $instance = new $path();

    $input = file_get_contents('php://input');
    $payload = json_decode($input, true);

    echo json_encode($instance($API->action, $payload, ));
} catch (\Exception $e) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
