<?php
session_start();

$plan=3499;
require 'vendor/autoload.php';
//\Stripe\Stripe::setApiKey('pk_live_51HKUuPBJHkDxSTq4xGWohVwBOTDtiNGfIP5hls0dKxUPftxkVVPYYb3CPwWNggQ89ajrKUiyv7rMxVCu7VnlCamG00eJAtqVmj');
$stripe = [
  "secret_key"      => "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",
  "publishable_key" => "pk_live_51HKUuPBJHkDxSTq4xGWohVwBOTDtiNGfIP5hls0dKxUPftxkVVPYYb3CPwWNggQ89ajrKUiyv7rMxVCu7VnlCamG00eJAtqVmj",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/the-wise-investment/';

$product = \Stripe\Product::Retrieve(
'prod_IKRL3L0e3n1dfo',[]
);
$price= \Stripe\Price::Retrieve(
  'price_1HjmSqBJHkDxSTq4iVAfojWZ',
  []
);
$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => $price['unit_amount'],
	  
      'product_data' => [
        'name' => $product['name'],
		//'description' = > $product['description'],
        'images' => $product['images'],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.php',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);
/*$stripe->subscriptions->create([
  'customer' => 'cus_IKORrc6CGZtvRN',
  'items' => [
    ['price' => 'price_1Hjjf42eZvKYlo2ClavWfCJP'],
  ],
]);*/
/*$subscription= \Stripe\Subscription::create([
	'customer' => $checkout_session->id,
]);*/
echo json_encode(['id' => $checkout_session->id]);