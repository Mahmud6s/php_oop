<?php

class User{
    public $name ="PHP User";
    public $age = 18;

    public function addTwo($num1,$bum2){
        echo $num1 + $bum2;
    }
}

$user = new User();
$user ->addTwo(3,5);
echo "<br>";
echo $user->name;

echo "<br>"; //


class Cart{
    public $itemsTotal;
    public $ShippingCost;
    public $discount;

    public function Calculate(){
        $subtotal = $this->itemsTotal + $this->ShippingCost - $this->discount;
        return $subtotal;
    }

}

$cart = new Cart();
$cart->itemsTotal = 100;
$cart->ShippingCost = 10;
$cart->discount = 10;
echo $cart->Calculate();