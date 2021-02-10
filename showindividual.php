<?php
    require_once('functions.php');
    $db = new PDO('mysql:host=db; dbname=collections-project2', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $allItems = $db->prepare("SELECT * FROM `collections`;");
    $allItems->execute();
    $allResults = $allItems->fetchAll();
    $numberOfItemInArray = count($allResults);
    $lastItem = $allResults[$numberOfItemInArray - 1];
    $firstItem = $allResults[0];

    if(isset( $_GET["next-button"])){
        $currentId = $_SESSION['id'] + 1;
            if ($currentId == $lastItem['id'] + 1){
                $currentId = $firstItem['id'];
            }
            $_SESSION = showIndividual($allResults, $currentId);
    } elseif(isset( $_GET["previous-button"])){
        $currentId = $_SESSION['id'] - 1;
            if ($currentId == $firstItem['id'] - 1) {
                $currentId = $lastItem['id'];
            }
        $_SESSION = showIndividual($allResults, $currentId);
    } else {
        $currentId = 1;
        $_SESSION = showIndividual($allResults, $currentId);
    }

    $currentId = $_SESSION['id'];
    $currentFood = $_SESSION['food'];
    $currentColour = $_SESSION['colour'];
    $currentSize = $_SESSION['size'];
    $currentHealthy = $_SESSION['healthy'];
    $currentImage = $_SESSION['image'];
    $currentDelete = $_SESSION['delete'];

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
<!--            header of page -->
            <div class="header-container">
                <div class="logo-container"><img class="logo-image" src="images/foodlogo.jpeg" alt="logo: image of folk and spoon in a heart"></div>
                <div class="header">
                    <h1>One Item</h1>
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
<!--            body of page-->
            <div class="body-container">
                <div class="image-container"><img class="image-of-food" alt="a picture of <?php echo $currentFood; ?>" src="<?php echo $currentImage; ?>"></div>
                <div class="stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: <?php echo $currentFood; ?></div>
                    <div class="stats">Colour Rating: <?php echo $currentColour; ?></div>
                    <div class="stats">Size Rating: <?php echo $currentSize; ?></div>
                    <div class="stats">Healthy Rating: <?php echo $currentHealthy; ?></div>
                </div>
                <div class="buttons-container">
                    <div class="previous-button">
                        <form action="showindividual.php" method="get"><input type="submit" id="previous-button" name="previous-button" value="Previous"></form>
                    </div>
                    <div class="db-id-number"><?php echo $currentId; ?></div>
                    <div class="next-button">
                        <form action="showindividual.php" method="get"><input type="submit" id="next-button" name="next-button" value="Next"></form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
