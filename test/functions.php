<?php
require_once('../functions.php');
use PHPUnit\Framework\TestCase;
class functions extends TestCase {
    public function testSuccessShowIndividual () {
        $allResults = array (
                0 => array ( 'id' => '1', 'food' => 'Chocolate', 'colour' => '5', 'size_rating' => '3', 'healthy_rating' => '1', 'image_path' => 'images/chocolate.jpeg', 'delete' => '0', ),
                1 => array ( 'id' => '2', 'food' => 'Banana', 'colour' => '7', 'size_rating' => '4', 'healthy_rating' => '9', 'image_path' => 'images/banana.jpeg', 'delete' => '0', ),
                2 => array ( 'id' => '3', 'food' => 'Olives', 'colour' => '3', 'size_rating' => '1', 'healthy_rating' => '6', 'image_path' => 'images/olives.jpeg', 'delete' => '0', ),
                3 => array ( 'id' => '4', 'food' => 'Cheese', 'colour' => '4', 'size_rating' => '10', 'healthy_rating' => '6', 'image_path' => 'images/cheese.jpeg', 'delete' => '0', ),
                4 => array ( 'id' => '5', 'food' => 'Caramel', 'colour' => '6', 'size_rating' => '3', 'healthy_rating' => '2', 'image_path' => 'images/caramel.jpeg', 'delete' => '0', ),
                5 => array ( 'id' => '6', 'food' => 'Carrots', 'colour' => '9', 'size_rating' => '4', 'healthy_rating' => '10', 'image_path' => 'images/carrots.jpeg', 'delete' => '0', ),
                6 => array ( 'id' => '7', 'food' => 'Blueberry', 'colour' => '8', 'size_rating' => '1', 'healthy_rating' => '9', 'image_path' => 'images/blueberry.jpeg', 'delete' => '0', ),
                7 => array ( 'id' => '8', 'food' => 'Vienetta', 'colour' => '6', 'size_rating' => '6', 'healthy_rating' => '0', 'image_path' => 'images/vienetta.jpeg', 'delete' => '0', ),
                8 => array ( 'id' => '9', 'food' => 'Ice', 'colour' => '0', 'size_rating' => '2', 'healthy_rating' => '10', 'image_path' => 'images/ice.jpeg', 'delete' => '0', ),
                9 => array ( 'id' => '10', 'food' => 'Baking Powder', 'colour' => '3', 'size_rating' => '0', 'healthy_rating' => '0', 'image_path' => 'images/bakingpowder.jpeg', 'delete' => '0', ),
            );

        $input = $allResults; //associative array
        $input2 = 1; // id key associated to results you'd like to return.
        $expectedOutput = ["id" => 1, "food" => "Chocolate", "colour" => 5, "size" => 3, "healthy" => 1, "image" => "images/chocolate.jpeg", "delete" => 0];
        $actualOutput = showIndividual($input, $input2);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testSuccessShowAll () {
        $allResults = array (
            0 => array ( 'id' => '1', 'food' => 'Chocolate', 'colour' => '5', 'size_rating' => '3', 'healthy_rating' => '1', 'image_path' => 'images/chocolate.jpeg', 'delete' => '0', ),
            1 => array ( 'id' => '2', 'food' => 'Banana', 'colour' => '7', 'size_rating' => '4', 'healthy_rating' => '9', 'image_path' => 'images/banana.jpeg', 'delete' => '0', ),
            2 => array ( 'id' => '3', 'food' => 'Olives', 'colour' => '3', 'size_rating' => '1', 'healthy_rating' => '6', 'image_path' => 'images/olives.jpeg', 'delete' => '0', ),
            3 => array ( 'id' => '4', 'food' => 'Cheese', 'colour' => '4', 'size_rating' => '10', 'healthy_rating' => '6', 'image_path' => 'images/cheese.jpeg', 'delete' => '0', ),
            4 => array ( 'id' => '5', 'food' => 'Caramel', 'colour' => '6', 'size_rating' => '3', 'healthy_rating' => '2', 'image_path' => 'images/caramel.jpeg', 'delete' => '0', ),
            5 => array ( 'id' => '6', 'food' => 'Carrots', 'colour' => '9', 'size_rating' => '4', 'healthy_rating' => '10', 'image_path' => 'images/carrots.jpeg', 'delete' => '0', ),
            6 => array ( 'id' => '7', 'food' => 'Blueberry', 'colour' => '8', 'size_rating' => '1', 'healthy_rating' => '9', 'image_path' => 'images/blueberry.jpeg', 'delete' => '0', ),
            7 => array ( 'id' => '8', 'food' => 'Vienetta', 'colour' => '6', 'size_rating' => '6', 'healthy_rating' => '0', 'image_path' => 'images/vienetta.jpeg', 'delete' => '0', ),
            8 => array ( 'id' => '9', 'food' => 'Ice', 'colour' => '0', 'size_rating' => '2', 'healthy_rating' => '10', 'image_path' => 'images/ice.jpeg', 'delete' => '0', ),
            9 => array ( 'id' => '10', 'food' => 'Baking Powder', 'colour' => '3', 'size_rating' => '0', 'healthy_rating' => '0', 'image_path' => 'images/bakingpowder.jpeg', 'delete' => '0', ),
        );

        $input = $allResults; //associative array
        $expectedOutput = '<img class="all-items-image-of-food" alt="a picture ofChocolate" src="images/chocolate.jpeg" title="Chocolate">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Chocolate</div>
                    <div class="stats">Colour Rating: 5</div>
                    <div class="stats">Size Rating: 3</div>
                    <div class="stats">Healthy Rating: 1</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofBanana" src="images/banana.jpeg" title="Banana">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Banana</div>
                    <div class="stats">Colour Rating: 7</div>
                    <div class="stats">Size Rating: 4</div>
                    <div class="stats">Healthy Rating: 9</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofOlives" src="images/olives.jpeg" title="Olives">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Olives</div>
                    <div class="stats">Colour Rating: 3</div>
                    <div class="stats">Size Rating: 1</div>
                    <div class="stats">Healthy Rating: 6</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofCheese" src="images/cheese.jpeg" title="Cheese">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Cheese</div>
                    <div class="stats">Colour Rating: 4</div>
                    <div class="stats">Size Rating: 10</div>
                    <div class="stats">Healthy Rating: 6</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofCaramel" src="images/caramel.jpeg" title="Caramel">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Caramel</div>
                    <div class="stats">Colour Rating: 6</div>
                    <div class="stats">Size Rating: 3</div>
                    <div class="stats">Healthy Rating: 2</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofCarrots" src="images/carrots.jpeg" title="Carrots">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Carrots</div>
                    <div class="stats">Colour Rating: 9</div>
                    <div class="stats">Size Rating: 4</div>
                    <div class="stats">Healthy Rating: 10</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofBlueberry" src="images/blueberry.jpeg" title="Blueberry">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Blueberry</div>
                    <div class="stats">Colour Rating: 8</div>
                    <div class="stats">Size Rating: 1</div>
                    <div class="stats">Healthy Rating: 9</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofVienetta" src="images/vienetta.jpeg" title="Vienetta">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Vienetta</div>
                    <div class="stats">Colour Rating: 6</div>
                    <div class="stats">Size Rating: 6</div>
                    <div class="stats">Healthy Rating: 0</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofIce" src="images/ice.jpeg" title="Ice">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Ice</div>
                    <div class="stats">Colour Rating: 0</div>
                    <div class="stats">Size Rating: 2</div>
                    <div class="stats">Healthy Rating: 10</div>
                </div><br />
                <img class="all-items-image-of-food" alt="a picture ofBaking Powder" src="images/bakingpowder.jpeg" title="Baking Powder">
                <div class="all-items-stats-container">
                    <div class="stats-header">Stats</div>
                    <div class="food-name">Food Name: Baking Powder</div>
                    <div class="stats">Colour Rating: 3</div>
                    <div class="stats">Size Rating: 0</div>
                    <div class="stats">Healthy Rating: 0</div>
                </div><br />
                '; //expected string a output
        $actualOutput = showAll($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}


