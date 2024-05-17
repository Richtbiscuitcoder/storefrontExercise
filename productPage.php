<?php
require_once 'src/Factory/PDOFactory.php';
require_once 'src/Models/ProductModel.php';
require_once 'src/Entities/Product.php';

$db = PdoFactory::connect();
$error = false;

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $product = ProductModel::getProduct($_GET['id'], $db);
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

                if ($error) {
                    echo $error;
                } else {
                    echo $product->getProductPage();
                }
            ?>

        </div>
    </body>
</html>