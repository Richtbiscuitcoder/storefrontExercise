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
        return "<a href='productPage.php?id=$this->id'>
                    <div class='product-box'>
                        <img src='$this->image' alt='product image' height='250' width='250' >
                        <div class='product-info'>
                            <a href='productPage.php?id=$this->id'> $this->title </a> 
                            <br>
                            <p>$$this->price.00</p>
                        </div>
                    </div>
                </a>
                ";
    }

    public function getProductPage(): string
    {
        return
            "<div class='image'>
                <img src='$this->image' alt='upclose shot of product'>
            </div>
            <div class='product-page'>
                <h2>$this->title</h2>
                <h3>$$this->price.00</h3>
                <p>$this->description</p>
            </div>";
    }

}


