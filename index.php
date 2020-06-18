<?php declare(strict_types=1);

use App\Adapter\PayPalAdapter;
use App\Adapter\StripeAdapter;
use App\Classes\PayPal;
use App\Classes\Stripe;

require_once __DIR__.'/vendor/autoload.php';

$payPal = new PayPalAdapter(new PayPal());
echo $payPal->pay(100);

$stripe = new StripeAdapter(new Stripe());
echo $stripe->pay(10);
