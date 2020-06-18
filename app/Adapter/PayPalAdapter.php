<?php declare(strict_types=1);


namespace App\Adapter;


use App\Classes\PayPal;
use App\Interfaces\Payment;

class PayPalAdapter implements Payment
{
    private $paypal;

    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }

    public function pay(int $amount)
    {
        return $this->paypal->doPayment($amount);
    }
}