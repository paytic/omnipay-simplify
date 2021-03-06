<?php

require __DIR__ . '/init.php';

$gateway = new \Paytic\Omnipay\Simplify\Gateway();
$parameters = [
    'apiPassword' => getenv('SIMPLIFY_API_PASSWORD'),
    'merchant' => getenv('SIMPLIFY_MERCHANT'),
    'orderId' => $_GET['id'],
];

$request = $gateway->completePurchase($parameters);
$response = $request->send();

$response->send();
