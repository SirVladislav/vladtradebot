<?php
require 'vendor/autoload.php';
$api = new Binance\API();
$api = new Binance\API("<api key>","<secret>");


$price = $api->price("BNBBTC");
print"<pre>";
print_r($_ENV['apiKey']);
?>
