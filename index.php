<?php
require 'vendor/autoload.php';
$api = new Binance\API();
//asdasd
$price = $api->price("BNBBTC");
print"<pre>";
print_r($price);
?>
