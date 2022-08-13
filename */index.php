<?php
require_once "Product.php";
require_once "Cart.php";

$product1 = new Product('монитор', 1000, null);
$product2 = new Product('мышь', 20, null);
$product3 = new product(null, null, [$product1, $product2]);


$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2, 2);
$cart->addProduct($product3);

echo $cart->getSum($cart->products);

print_r($cart->products);