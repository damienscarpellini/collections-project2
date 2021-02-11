<?php

session_start();

$db = new PDO('mysql:host=db; dbname=collections-project2', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$allItems = $db->prepare("SELECT * FROM `collections`;");
$allItems->execute();
$allResults = $allItems->fetchAll();
$numberOfItemInArray = count($allResults);
$lastItem = $allResults[$numberOfItemInArray - 1];
$firstItem = $allResults[0];


$currentId = $_SESSION['id'];
$currentFood = $_SESSION['food'];
$currentColour = $_SESSION['colour'];
$currentSize = $_SESSION['size'];
$currentHealthy = $_SESSION['healthy'];
$currentImage = $_SESSION['image'];
$currentDelete = $_SESSION['delete'];
$_SESSION['lastItem'] = $lastItem['id'];
$_SESSION['firstItem'] = $firstItem['id'];
$_SESSION['allResults'] = $allResults;
var_dump($allResults);

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



