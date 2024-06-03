<?php

class  Product
{
    private string $title;
    private float $price;
    private string $image;
    private string $description;
    private string $id;

    public function getDisplay(): string
    {
        $price = $this->price;
        return "<a href='productPage.php?id=$this->id'>
                    <div class='product-box'>
                        <img src='$this->image' alt='product image' height='250' width='250' >
                        <div class='product-info'>
                            <a href='productPage.php?id=$this->id'> $this->title </a> 
                            <br>
                            <p>$" . number_format($price, 2) . "</p>
                        </div>
                    </div>
                </a>
                ";
    }

    public function getProductPage(): string
    {
        $price = $this->price;
        return
            "<div class='image'>
                <img src='$this->image' alt='upclose shot of product'>
            </div>
            <div class='product-page'>
                <h2>$this->title</h2>
                <h3>$" . number_format($price, 2) . "</h3>
                <p>$this->description</p>
            </div>";
    }

}


