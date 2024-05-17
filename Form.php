<?php




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
            <form action="/action_page.php">
                <fieldset>
                    <legend>Create your own product:</legend>
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title"><br><br>
                    <label for="price">price:</label>
                    <input type="text" id="price" name="price"><br><br>
                    <label for="character">Character:</label>
                    <input type="text" id="character" name="character"><br><br>
                    <label for="description">Description :</label>
                    <textarea type="text" id="Description" name="Description"></textarea><br><br>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
            <?php


            ?>
        </div>
    </body>
</html>