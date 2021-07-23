<?php
require './parameters.php';
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
// \Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

header('Content-Type: application/json');

$MY_DOMAIN = PARAMS['base_host'];
$tableName = '';



$colonne = $_POST['colonne'];
$id = $_POST['id'];
$table = $_POST['table'];
$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'metadata' => ['id' => 'test'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 200,
      'product_data' => [
        'name' => 'Stubborn Attachments',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $MY_DOMAIN .'/success.php?id='.$id.'&fill='.$colonne.'&ball='.$table,
  'cancel_url' => $MY_DOMAIN .'/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
