<?php declare(strict_types=1);

namespace App\Adapter;

use App\Classes\Stripe;
use App\Interfaces\Payment;

class StripeAdapter implements Payment
{
    private $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function pay(int $amount)
    {
        return $this->stripe->payCustomer($amount);
    }
}