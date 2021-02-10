<?php
    require_once('functions.php');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show All</title>
    </head>
    <body>
        <div class="container">
            <div class="header-container">
                <div class="logo-container"><img class="logo-image" src="images/foodlogo.jpeg" alt="logo: image of folk and spoon in a heart"></div>
                <div class="header">
                    <h1 class=>Collection</h1>
                    <div class="nav-container">
                        <ul class="nav-buttons">
                            <li class="nav-list-item"><a class="home-link link-button" href="index.php">HOME</a></li>
                            <li class="nav-list-item"><a class="one-link link-button" href="showindividual.php">ONE</a></li>
                            <li class="nav-list-item"><a class="all-link link-button" href="showall.php">ALL</a></li>
                            <li class="nav-list-item"><a class="edit-link link-button" href="edit.php">EDIT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="all-items-container">
                <div class="item-card"><?php echo showAll($allResults); ?></div>
            </div>
        </div>
    </body>
</html>
