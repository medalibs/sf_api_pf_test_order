<?php

namespace App\Service;

use App\Entity\Order;

class InvoiceCalculator
{
    public const TAX_RATE = 0.2;

    private DiscountCalculator $discountCalculator;

    public function __construct(DiscountCalculator $discountCalculator)
    {
        $this->discountCalculator = $discountCalculator;
    }

    public function calculate(Order $order): float
    {
        $subtotal = 0.0;

        foreach ($order->getItems() as $item) {
            $subtotal += $item->getProduct()->getPrice() * $item->getQuantity();
        }

        $discount = $this->discountCalculator->calculate($order);

        $tax = ($subtotal - $discount) * self::TAX_RATE;

        return $subtotal - $discount + $tax;
    }
}
