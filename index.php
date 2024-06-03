

<?php
require_once 'src/Factory/PDOFactory.php';
require_once 'src/Models/ProductModel.php';
require_once 'src/Entities/Product.php';
require_once 'src/Entities/Categories.php';
require_once 'src/Entities/Characters.php';

$db = PdoFactory::connect();
$products = ProductModel::getProductsByCategoryId($db);
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
                echo $product->getDisplay();
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
            <a href="Form.php"><button class="button">Create your own product!</button></a>
        </div>
    </body>
</html>

