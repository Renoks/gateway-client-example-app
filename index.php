<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';


if (false === isset($endpoint)) {
    throw new InvalidArgumentException('$endpoint variable must be defined to proceed');
}
if (false === isset($login)) {
    throw new InvalidArgumentException('$login variable must be defined to proceed');
}
if (false === isset($password)) {
    throw new InvalidArgumentException('$password variable must be defined to proceed');
}

// get prices
$client = new WebLabLv\Renoks\Client\PriceClient($endpoint, $login, $password);
$client->withWatermark(true)->sendRequest();

/** @var \WebLabLv\Renoks\Entity\Price $entity */
foreach($client->getResponseEntities() as $entity) {
    print_r($entity);
    usleep(5000);
}
echo "\n\n";


// create order
$client = new \WebLabLv\Renoks\Client\OrderClient($endpoint, $login, $password);
$client->create([
    'product'  => 'test-product',
    'quantity' => random_int(2, 8)
]);
