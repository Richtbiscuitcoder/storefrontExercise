<?php
require_once 'src/factory/PDOFactory.php';
require_once 'src/models/ProductModel.php';
require_once 'src/Entities/Products.php';

$db = PdoFactory::connect();
$id = ProductModel::getProductsById('id', $db);
$products = ProductModel::getProducts($db);
