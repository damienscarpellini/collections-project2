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
                $currentId = 1;
            }
            $_SESSION = showIndividual($allResults, $currentId);
    } elseif(isset( $_GET["previous-button"])){
        $currentId = $_SESSION['id'] - 1;
            if ($currentId == $firstItem['id'] - 1) {
                $currentId = 10;
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
            <div class="logo-container"></div>
            <div class="header-container"></div>
            <div class="nav-container">
                <a class="home-link">HOME</a>
                <a class="all-link">ALL</a>
                <a class="edit-link">EDIT</a>
            </div>
<!--            body of page-->
            <div class="body-container">
                <div class="image-container"><img alt="a picture of <?php echo $currentFood ?>" src="<?php echo $currentImage ?>"></div>
                <div class="stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name"><?php echo $currentFood ?></div>
                    <div class="stats"><?php echo $currentColour ?></div>
                    <div class="stats"><?php echo $currentSize ?></div>
                    <div class="stats"><?php echo $currentHealthy ?></div>
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
