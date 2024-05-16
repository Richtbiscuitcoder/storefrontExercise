<?php

class Product
{
    private string $title;
    private float $price;
    private string $image;

    private string $description;
    private string $id;

    public function getProducts(): string
    {
        return "
                <div class='product-box'>
                    <img src='$this->image' alt='product image' height='200' width='200' >
                    <div class='product-info'>
                        <a href='./productPage.php?id=$this->id'> $this->title </a> 
                        <p>$$this->price.00</p>
                    </div>
                </div>
                ";
    }

    public function getProductPage(): string
    {
        return
            "<div class='image'>
                <img src='$this->image' alt='upclose shot of product'>
            </div>
            <div class='product-page'>
                <h1>$this->title</h1>
                <h3>$$this->price.00</h3>
                <p>$this->description</p>
            </div>";
    }

}


