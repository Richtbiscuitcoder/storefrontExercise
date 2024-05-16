

<?php
require_once 'src/factory/PDOFactory.php';
require_once 'src/models/ProductModel.php';
require_once 'src/Entities/Product.php';
require_once 'src/Entities/Categories.php';
require_once 'src/Entities/Characters.php';

$db = PdoFactory::connect();
$products = ProductModel::getProducts($db);
$image = ProductModel::getProducts($db);
$character_details = ProductModel::characterChecklist($db);
$category_details = ProductModel::categoryChecklist($db)


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <title>Store Front</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <div class="tile-box">
            <?php
            foreach ($products as $product) {
                echo $product->getProducts();
            }
            echo '<div class="checkboxes">';
            echo '<h1>Categories</h1>';
            foreach ($category_details as $category) {
                echo $category->categoryChecklist();
            }
            echo '<h1>Characters</h1>';
            foreach ($character_details as $character) {
                echo $character->characterChecklist();
            }
            echo '</div>';

            ?>
        </div>
    </body>
</html>

