<?php
require_once 'src/factory/PDOFactory.php';
require_once 'src/models/ProductModel.php';
require_once 'src/Entities/Product.php';
$db = PdoFactory::connect();
$product = ProductModel::getProduct($_GET['id'], $db);

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
                echo $product->getProductPage();
            ?>
        </div>
    </body>
</html>