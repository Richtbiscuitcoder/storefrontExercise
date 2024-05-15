<?php

class ProductModel
{
    public static function getProducts(PDO $db): array
    {
        $query = $db->prepare("SELECT `title`, `price`, `image` FROM `products`;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Products::class);
        return $query->fetchAll();
    }

    public static function getProductsById($id, PDO $db) {
        $query = $db->prepare("SELECT `title`, `price` FROM `products` WHERE `id` = :id;");
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, Products::class);
        return $query->fetch();
    }


}