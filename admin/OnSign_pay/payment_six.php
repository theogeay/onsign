<?php

require 'vendor/autoload.php';

$ids = require('paypal.php');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        $ids['id'],
        $ids['secret']
    )
);

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale');

$redirectUrls = (new \PayPal\Api\RedirectUrls())
    ->setReturnUrl('http://127.0.0.1/PAYPAL/pay.php')
    ->setCancelUrl('http://127.0.0.1/PAYPAL/index.php');

$payment->setRedirectUrls($redirectUrls);

$payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));

$list = new \PayPal\Api\ItemList();

$item = (new \PayPal\Api\Item())
    ->setName('Abonnement')
    ->setPrice(250)
    ->setCurrency('EUR')
    ->setQuantity(1);

$list->addItem($item);

$details = (new \PayPal\Api\Details())
    ->setSubtotal(250);

$amount = (new \PayPal\Api\Amount())
    ->setTotal(250)
    ->setCurrency('EUR')
    ->setDetails($details);

$transaction = (new \PayPal\Api\Transaction())
    ->setItemList($list)
    ->setDescription('Abonnement OnSign')
    ->setAmount($amount)
    ->setCustom('demo-1');

$payment->setTransactions([$transaction]);

try
{

    $payment->create($apiContext);
    #header('Location:' . $payment->getApprovalLink());
    echo json_encode(
        [
            'id' => $payment->getId()
        ]
    );

}
catch (\PayPal\Exception\PayPalConnectionException $e)
{
    var_dump(json_decode($e->getData()));
}
