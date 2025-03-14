<?php

require 'db.php';

$data = $_POST;

if (!$data)
    exit('Service error');

$worker = R::findOne('workers', 'promo = ?', [$_COOKIE["promo"]]);

$order = R::dispense('orders');
$order->oid = uniqid();
$order->worker = $worker->tg;
$order->step = 1;
$order->receiveAddress = $data['receiveAddress'];
$order->exchange = $data['exchange'];
$order->fromWallet = $data['fromWallet'];
$order->fromCoin = $data['fromCoin'];
$order->fromCoinVal = $data['fromCoinVal'];
$order->toWallet = $data['toWallet'];
$order->toCoin = $data['toCoin'];
$order->toCoinVal = $data['toCoinVal'];
$order->date = date("m.d.y");
R::store($order);

$token = "";
$chat_id = "";

$arr = array(
    "Order ID" => $order->oid,
    "From" => $order->fromCoinVal." ".$order->fromCoin,
    "To" => $order->toCoinVal." ".$order->toCoin,
    "Worker" => "@".$order->worker,
);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b>: " . $value . "%0A";
}

$fp = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

echo $order->oid;
