<?php declare(strict_types=1);


namespace App\Interfaces;


interface Payment
{
    public function pay(int $amount);
}