<?php declare(strict_types=1);


namespace App\Classes;


class PayPal
{
    public function doPayment(int $amount): string
    {
        return 'Sending payment of £'. $amount. ' using paypal.';
    }
}