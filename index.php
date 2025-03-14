<?php

require 'assets/php/db.php';

foreach (array_keys($_GET) as $promo)
    setcookie("promo", $promo, time() + 60 * 60 * 24 * 366 * 15, "/");

$sites = array(
    "en" => "en",
    "ru" => "ru",
);

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

echo $lang;

if (!in_array($lang, array_keys($sites))) {
    $lang = 'en';
}

header('Location: ' . $sites[$lang]);
