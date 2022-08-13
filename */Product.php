<?php

class Product
{
    private ?string $title;
    private ?float $price;

    private ?array $components;
    private int $count;

    public function __construct(?string $title, ?float $price, ?array $arr) {
        $this->title = $title;
        $this->price = $price;
        $this->components = $arr;

    }

    public function getCount() {
        return $this->count = 1;
    }
    public function setCount($count) {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return array|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }


}