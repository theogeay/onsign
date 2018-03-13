<?php

require 'vendor/autoload.php';

$ids = require 'paypal.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);


$payment = \PayPal\Api\Payment::get($_POST['paymentID'], $apiContext);

$execution = (new \PayPal\Api\PaymentExecution())
    ->setPayerId($_POST['payerID'])
    ->setTransactions($payment->getTransactions());


try
{
    $payment->execute($execution, $apiContext);
    var_dump($payment->getTransactions()[0]->getCustom());
    var_dump($payment);
}
catch (\PayPal\Exception\PayPalConnectionException $e)
{
        var_dump(json_decode($e->getData()));
}