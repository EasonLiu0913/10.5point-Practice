<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$total =  isset($_POST['total']) ? intval($_POST['total']) : 0;
$cards =  isset($_POST['cards']) ? $_POST['cards'] : ['null'];
// printf('{"$total":%s ,"$cards":%s}', $total, $cards);


$output = [
    'cards' => $cards,
    'total' => $total - 10
];
echo json_encode($_POST);
// echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
