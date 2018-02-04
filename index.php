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
$client->withWatermark(false)->sendRequest();

/** @var \WebLabLv\Renoks\Entity\Price $entity */
foreach($client->getResponseEntities() as $entity) {
    print_r($entity);
    usleep(5000);
}
echo PHP_EOL;

echo PHP_EOL;
