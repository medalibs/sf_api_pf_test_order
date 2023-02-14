<?php

namespace App\Tests;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Service\DiscountCalculator;
use App\Service\InvoiceCalculator;
use PHPUnit\Framework\TestCase;

class InvoiceCalculatorTest extends TestCase
{
    /**
     * If price below the threshold < 1000 euros
     */
    public function testPriceBelowThresholdCalculate(): void
    {
        $calculator = new InvoiceCalculator(new DiscountCalculator());

        $order = new Order();
        $product1 = new Product();
        $product1->setPrice(10);
        $item1 = new OrderItem();
        $item1->setProduct($product1);
        $item1->setQuantity(2);
        $order->addItem($item1);

        $product2 = new Product();
        $product2->setPrice(20);
        $item2 = new OrderItem();
        $item2->setProduct($product2);
        $item2->setQuantity(1);
        $order->addItem($item2);

        $total = $calculator->calculate($order);

        // tax rate + price without tax = 20% + 40 = 48
        $this->assertEquals(48, $total);
    }

    /**
     * if price above the threshold of > 1000 euros
     */
    public function testPriceAboveThresholdCalculate(): void
    {
        $calculator = new InvoiceCalculator(new DiscountCalculator());

        $order = new Order();
        $product1 = new Product();
        $product1->setPrice(300);
        $item1 = new OrderItem();
        $item1->setProduct($product1);
        $item1->setQuantity(2);
        $order->addItem($item1);

        $product2 = new Product();
        $product2->setPrice(50);
        $item2 = new OrderItem();
        $item2->setProduct($product2);
        $item2->setQuantity(10);
        $order->addItem($item2);

        $total = $calculator->calculate($order);

        // tax rate + price without tax - discount = 20% + 1100 - 10% = 1188
        $this->assertEquals(1188, $total);
    }
}
