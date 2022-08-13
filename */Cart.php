<?php

class Cart
{
    public array $products = [];

    public function addProduct($product, int $count = 1)
    {

        if($product->getComponents()) {

            foreach ($product->getComponents() as $value) {
               $value->setCount($count);

            }
            $this->products[] = $product->getComponents();
        } else {
            $product->setCount($count);

            if (!in_array($product, $this->products)) {
                $this->products[] = $product;
                $item = array_search($product, $this->products);
                $this->products[$item]->setCount($count);

//            } else {
//                $item = array_search($product, $this->products);
//                $this->products[$item]->setCount($count);

            }

        }
    }
    public function removeProduct(Product $product)
    {
    }
    public function getSum($arr, $sum = 0): int
    {

        foreach ($arr as $value) {
            if(is_array($value)){
                $sum += $this->getSum($value);
            } else {
                $sum += $value->getPrice() * $value->getCount();
            }

        }
        return $sum;
    }



}