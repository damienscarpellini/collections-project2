<?php
    require_once('functions.php');
    $db = new PDO('mysql:host=db; dbname=collections-project2', 'root', 'password');
    $query = $db->prepare("SELECT * FROM `collections`;");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query->execute();
    $allResults = $query->fetchAll();
    $currentId = 1;
    $dbRowData = showIndividual($allResults, $currentId);
    $currentId = $dbRowData['id'];
    $currentFood = $dbRowData['food'];
    $currentColour = $dbRowData['colour'];
    $currentSize = $dbRowData['size'];
    $currentHealthy = $dbRowData['healthy'];
    $currentImage = $dbRowData['image'];
    $currentDelete = $dbRowData['delete'];

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
                    <div class="previous-button"></div>
                    <div class="db-id-number"><?php echo $currentId; ?></div>
                    <div class="next-button"><?php var_dump($dbRowData); ?></div>
                </div>
            </div>
        </div>
    </body>
</html>
