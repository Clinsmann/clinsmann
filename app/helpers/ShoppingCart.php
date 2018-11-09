<?php

namespace App\helpers;

class ShoppingCart
{
    public $items = array(), $netTotal, $grossTotal, $deliveryFee = 0;

    public function __construct()
    {
        $this->clearCart();
    }

    public function clearCart()
    {
        $this->items = array();
        $this->netTotal = 0;
        $this->grossTotal = 0;
        $this->deliveryFee = 0;
    }

    public function calculateDeliveryFee()
    {
        $this->deliveryFee = 50 * $this->netTotal;
        $this->grossTotal = $this->netTotal + $this->deliveryFee;
    }

    public function addItem($name, $quantity, $price)
    {
        $this->items[$name] = $quantity;
        $this->netTotal += ($quantity * $price);
        $this->calculateDeliveryFee();
    }

    public function removeItem($name, $quantity, $price)
    {
        if ($this->items[$name] == $quantity) {
            unset($this->items[$name]);
        } else {
            $this->items[$name] = $quantity;
        }
        $this->netTotal -= ($quantity * $price);
        $this->calculateDeliveryFee();
    }


    public function checkout($paid_amount)
    {
        if ($paid_amount < $this->grossTotal) {
            return "Insufficient fund";
        }

        $balance = $this->balance($paid_amount);
        $this->clearCart();
        return $balance;
    }

    public function balance($paid_amount)
    {
        return ($paid_amount - $this->grossTotal);
    }
}



class CouponShoppingCart extends ShoppingCart{



}