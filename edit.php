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
            <div class="logo-container"></div>
            <div class="header-container"></div>
            <div class="nav-container">
                <a class="home-link">HOME</a>
                <a class="all-link">ALL</a>
                <a class="edit-link">EDIT</a>
            </div>
            <div class="add"></div>
            <div class="delete"><?php showALL($allResults); ?></div>
        </div>
    </body>
</html>