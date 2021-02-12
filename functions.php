<?php
session_start();

$currentId = $_SESSION['id'];
$currentFood = $_SESSION['food'];
$currentColour = $_SESSION['colour'];
$currentSize = $_SESSION['size'];
$currentHealthy = $_SESSION['healthy'];
$currentImage = $_SESSION['image'];
$currentDelete = $_SESSION['delete'];

/**
 * @param $allResults - associative array you want to itterate through.
 * @param $id - id of the item you want the information for from the associative array.
 * @return array return all information relating to the id you are asking for.
 *
 */
function showIndividual($allResults, $id){
    foreach ($allResults as $row) {
        if($id==$row['id']){
            return [
                'id' => $row["id"],
                'food' => $row["food"],
                'colour' => $row["colour"],
                'size' => $row["size_rating"],
                'healthy' => $row["healthy_rating"],
                'image' => $row['image_path'],
                'delete' => $row["delete"]];
        }
    }
}

/**
 * @param $items - takes an associative array
 * @return string - concatenates all the items into a card then concatinates them into a string variable.
 */
function showAll($items) {
    $allCards = '';
    foreach ($items as $item) {
                $allCards .=  '<img class="all-items-image-of-food" alt="a picture of' . $item['food'] . '" src="' . $item['image_path'] . '" title="' . $item['food'] . '">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: ' . $item['food'] . '</div>
                    <div class="stats">Colour Rating: ' . $item['colour'] . '</div>
                    <div class="stats">Size Rating: ' . $item['size_rating'] . '</div>
                    <div class="stats">Healthy Rating: ' . $item['healthy_rating'] . '</div>
                </div><br />
                ';
    }
    return $allCards;
}

function getFoodFromDB(){
    $db = new PDO('mysql:host=db; dbname=collections-project2', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $allItems = $db->prepare("SELECT * FROM `collections`;");
    $allItems->execute();
    $allResults = $allItems->fetchAll();
    return $allResults;
}

function getDBConnection() {
    return $db = new PDO('mysql:host=db; dbname=collections-project2', 'root', 'password');
}

function editALL($items) {
    $allCards = '
                    <div class="edit-title-row">
                       <div class="title-row col1">Food Name</div>
                       <div class="title-row col2">Colour Rating</div>
                       <div class="title-row col3">Size Rating</div>
                       <div class="title-row col4">Healthy Rating</div>
                       <div class="title-row col5">File Path</div>
                     </div>
                    ';
    foreach ($items as $item) {
        $allCards .=  '
                <div class="edit-item-card">
                    <div class="edit-stats-data col1">' . $item['food'] . '</div>
                    <div class="edit-stats-data col2">' . $item['colour'] . '</div>
                    <div class="edit-stats-data col3">' . $item['size_rating'] . '</div>
                    <div class="edit-stats-data col4">' . $item['healthy_rating'] . '</div>
                    <div class="edit-stats-data col5"> ' . $item['image_path'] . '</div>
                </div>';
    }
    $allCards .= '               
                        <form class="add-data-form" action="edit.php" method="post">
                            <input class="input-col1" type="text" name="input-food-name">
                            <input class="input-col2" type="number" name="input-colour-rating">
                            <input class="input-col3" type="number" name="input-size-rating">
                            <input class="input-col4" type="number" name="input-healthy-rating">
                            <input class="input-col5" type="text" name="input-file-path">
                            <input class="add-button" type="submit" name="submit" value="Add">
                        </form>
                      </div> ';
    return $allCards;
}


function bindParams($a, $b, $insertData){
//    $b = '`' . $b . '`';
    return $insertData->bindParam($a,$b);
}

function addEntryToDb($db){

    return $addToDB = "INSERT INTO `collections` (`food`, `colour`, `size_rating`, `healthy_rating`, `image_path`) VALUES (:food, :colour, :size_rating, :healthy_rating, :image_path);";

}

