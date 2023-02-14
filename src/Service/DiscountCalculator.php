<?php

namespace App\Service;

use App\Entity\Order;

class DiscountCalculator
{
    public const DISCOUNT_RATE = 0.1;
    public const DISCOUNT_THRESHOLD = 1000;

    public function calculate(Order $order): float
    {
        $subtotal = 0.0;

        foreach ($order->getItems() as $item) {
            $subtotal += $item->getProduct()->getPrice() * $item->getQuantity();
        }

        if ($subtotal >= self::DISCOUNT_THRESHOLD) {
            $discount = $subtotal * self::DISCOUNT_RATE;
        } else {
            $discount = 0.0;
        }

        return $discount;
    }
}