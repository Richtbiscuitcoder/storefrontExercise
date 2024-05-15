<?php

class Products
{
    private string $title;
    private float $price;

    private string $image;
    public function getProducts(): string
    {
        return "<img src='$this->image' alt='product image'>
                <p> $this->title </p>
                <p>$this->price</p>";
    }

}


