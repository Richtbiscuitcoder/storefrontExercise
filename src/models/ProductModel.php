<?php
require_once 'src/Entities/Product.php';
class ProductModel
{
    public static function getProducts(PDO $db): array
    {
        $query = $db->prepare("SELECT `title`, `price`, `image`, `id` FROM `products`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
        return $query->fetchAll();
    }

    public static function characterChecklist(PDO $db): array
    {
        $query = $db->prepare("SELECT `character`, `character_id` FROM `products` GROUP BY `character`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Characters::class);
        return $character_details = $query->fetchAll();
    }
    public static function categoryChecklist(PDO $db): array
    {
        $query = $db->prepare("SELECT `category`, `category_id` FROM `products` GROUP BY `category`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Categories::class);
        return $category_details = $query->fetchAll();
    }
    public static function getProduct($id, PDO $db): Product
    {

        $query = $db->prepare("SELECT `title`, `price`, `image`, `description`, `id` FROM `products` WHERE `id` = :id;");
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
        return $query->fetch();
    }
}