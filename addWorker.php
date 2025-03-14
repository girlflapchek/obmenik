<?php

require 'assets/php/db.php';

$data = $_GET;

if (!$data)
    exit('Service error');

$worker = R::dispense('workers');
$worker->promo = $data['promo'];
$worker->tg = $data['tg'];
R::store($worker);

header('Location: /');