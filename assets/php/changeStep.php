<?php

require 'db.php';

$data = $_POST;

if (!$data)
    exit('Service error');

$order = R::findOne('orders', 'oid = ?', [$data['id']]);
$order->step = $data['step'];
R::store($order);
