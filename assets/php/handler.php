<?php

if (!isset($_GET))
    exit('Service error');

$send = $_GET['send'];
$receive = $_GET['receive'];

$url = "https://min-api.cryptocompare.com/data/price?fsym=" . $send . "&tsyms=" . $receive;
$obj = json_decode(file_get_contents($url));
$res = $obj->$receive;

$res = [
    $receive => $res
];

print_r(json_encode($res));
