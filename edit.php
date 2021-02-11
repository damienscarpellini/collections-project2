<?php
    require_once('functions.php');
    $allResults = getFoodFromDB();


    if(isset($_POST['submit'])) {
        $food = $_POST['input-food-name'];
        $colourRating = $_POST['input-colour-rating'];
        $sizeRating = $_POST['input-size-rating'];
        $healthyRating = $_POST['input-healthy-rating'];
        $filePath = $_POST['input-file-path'] . '`';
        $db = getDBConnection(); //open db connection
        $insert = addEntryToDb($db); //get insert code with placeholders
        $insertData = $db->prepare($insert);
        $insertData->bindParam(':food' , $food);
        $insertData->bindParam(':colour' ,  $colourRating);
        $insertData->bindParam(':size_rating' , $sizeRating);
        $insertData->bindParam(':healthy_rating' , $healthyRating);
        $insertData->bindParam(':image_path' , $filePath);
        var_export($insertData);
        $insertData->execute();
        unset($_POST['input-food-name']);
        unset($_POST['input-colour-rating']);
        unset($_POST['input-size-rating"']);
        unset($_POST['input-healthy-rating']);
        unset($_POST['input-file-path']);
}

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
            <div class="edit"><?php echo editALL($allResults); ?></div>

        </div>
    </body>
</html>