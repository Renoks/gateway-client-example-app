<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new WebLabLv\Renoks\Client\PriceClient('renoks-gateway-eumbrass.weblab.lv/api/v0.1', 'client1', 'clientpass');
$client->sendRequest();

echo PHP_EOL;
echo substr($client->getResponseJson(), 0, 150);
echo PHP_EOL;
echo PHP_EOL;
print_r(current($client->getResponseArray()));
echo PHP_EOL;
echo PHP_EOL;
print_r(current($client->getResponseEntities()));
echo PHP_EOL;
echo PHP_EOL;
