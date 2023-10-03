<?php

class Product {

    private $id;
    private $name;
    private $price;

    public function __construct(int $productId, string $productName, float $productPrice) {
        $this->id = $productId;
        $this->name = $productName;
        $this->price = $productPrice;
    }

    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }
    public function showDetails() {
        echo "Product Details:"."<br>";
        echo "id = {$this->id}"."<br>";
        echo "Name = {$this->name}"."<br>";
        echo "Price = {$this->getFormattedPrice()}"."<br>";
    }
}

$product1 = new Product(1, 'T-shirt', 19.99);
$product1->showDetails();
echo "<br>";
$product2 = new Product(2, 'Shirt', 12.55);
$product2->showDetails();