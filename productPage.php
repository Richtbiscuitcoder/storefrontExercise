<?php
require_once 'src/Factory/PDOFactory.php';
require_once 'src/Models/ProductModel.php';
require_once 'src/Entities/Product.php';

$db = PdoFactory::connect();
$error = false;
$product = "";
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    if ($_GET['id'] > 0 && ($_GET['id'] < 17)) {
        $product = ProductModel::getProduct($_GET['id'], $db);
    } else {
        $error = "This is not the page you are looking for";
    }
} else {
    $error = "This is not the page you are looking for";
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <title>Product Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div>
            <?php

                if ($product)  {
                    echo $product->getProductPage();
                } else {
                    echo $error;
                }
            ?>
            <a href="index.php">
                <button>Back</button>
            </a>

        </div>
    </body>
</html>