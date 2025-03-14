<?php

require 'db.php';

$data = $_POST;

if (!$data)
    exit('Service error');

$wallet = R::findOne('wallets', 'coin = ?', [$data['coin']]);
echo $wallet->address;
