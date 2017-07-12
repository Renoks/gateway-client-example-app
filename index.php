<?php
/**
 * Created by PhpStorm.
 * User: jkuprijanovs
 * Date: 7/12/2017
 * Time: 2:15 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

$client = new WebLabLv\Renoks\Client\PriceClient(
    'https://renoks-car-parts-gateway-jkuprijanovs.weblab.lv/api/v0.1',
    'test',
    'test'
);

$client->sendRequest();
$arrays = $client->getResponse();
print_r(current($arrays));
