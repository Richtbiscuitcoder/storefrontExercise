<?php
require_once 'src/Factory/PDOFactory.php';
$db = PdoFactory::connect();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <title>Product Form Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div>

            <?php
            echo
            '<form action="/action_page.php" class="form">
                <fieldset>
                        <legend>Create your own product:</legend>
                    <p>
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title"><br><br>
                    </p>
                    <p>
                        <label for="price">Price:</label>
                        <input type="text" id="price" name="price"><br><br>
                    </p>
                    <p> 
                        <label for="character">Character:</label>
                        <input type="text" id="character" name="character"><br><br>
                    </p>
                    <p>
                        <label for="description">Description :</label>
                        <textarea type="text" id="Description" name="Description"></textarea><br><br>
                    <p> 
                        <input type="submit" value="Submit">
                    </p>               
                </fieldset>
            </form>';

            ?>
            <a href="index.php">
                <button>Back</button>
            </a>
        </div>
    </body>
</html>