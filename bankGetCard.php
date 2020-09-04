<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);
$cards = $decoded['cards'];
$total = $decoded['total'];

// $total =  isset($_POST['total']) ? intval($_POST['total']) : 0;
// $cards =  isset($_POST['cards']) ? $_POST['cards'] : ['null'];
// printf('{"$total":%s ,"$cards":%s}', $total, $cards);


$output = [
    'cards' => $cards,
    'total' => $total - 10
];

echo json_encode($output, JSON_UNESCAPED_UNICODE);
