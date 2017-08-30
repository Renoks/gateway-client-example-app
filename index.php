<?php

require_once __DIR__ . '/vendor/autoload.php';

if (false === isset($endpoint)) {
    throw new InvalidArgumentException('$endpoint variable must be defined to proceed');
}
if (false === isset($login)) {
    throw new InvalidArgumentException('$login variable must be defined to proceed');
}
if (false === isset($password)) {
    throw new InvalidArgumentException('$password variable must be defined to proceed');
}

$client = new WebLabLv\Renoks\Client\PriceClient($endpoint, $login, $password);
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
