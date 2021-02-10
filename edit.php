<?php
    require_once('functions.php');
    $db = new PDO('mysql:host=db; dbname=collections-project2', 'root', 'password');
    $query = $db->prepare("SELECT * FROM `collections`;");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query->execute();
    $allResults = $query->fetchAll();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Individual</title>
    </head>
    <body>
        <div class="container">
            <div class="header-container">
                <div class="logo-container"><img class="logo-image" src="images/foodlogo.jpeg" alt="logo: image of folk and spoon in a heart"></div>
                <div class="header">
                    <h1>Edit Page</h1>
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
            <div class="add"></div>
            <div class="delete"><?php showALL($allResults); ?></div>
        </div>
    </body>
</html>