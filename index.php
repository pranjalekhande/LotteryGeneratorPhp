<?php
function generateLotteryNumbers() {
    $mainNumbers = [];
    while (count($mainNumbers) < 5) {
        $num = rand(1, 69);
        if (!in_array($num, $mainNumbers)) {
            $mainNumbers[] = $num;
        }
    }
    sort($mainNumbers);
    $powerball = rand(1, 26);
    return [
        'mainNumbers' => $mainNumbers,
        'powerball' => $powerball
    ];
}

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '/generate':
        header('Content-Type: application/json');
        echo json_encode(generateLotteryNumbers());
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}