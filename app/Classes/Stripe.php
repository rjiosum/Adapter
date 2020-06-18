<?php declare(strict_types=1);


namespace App\Classes;


class Stripe
{
    public function payCustomer(int $amount): string
    {
        return 'Sending payment of £'. $amount. ' using stripe.';
    }
}