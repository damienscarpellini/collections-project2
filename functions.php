<?php

/**
 * @param $allResults - store all results in the database
 * print a list of all items in the data base with a line break between each row.
 */
function showAll($allResults){
    echo '<ul>';
    foreach ($allResults as $row) {
        echo '<ul>';
        echo '<li>id:' . $row["id"] . '</li>';
        echo '<li>Food:' . $row["food"] . '</li>';
        echo '<li>Colour Rating:' . $row["colour"] . '</li>';
        echo '<li>Size Rating:' . $row["size-rating"] . '</li>';
        echo '<li>Healthy Rating:' . $row["healty-rating"] . '</li>';
        echo '<li>Delete?:' . $row["delete"] . '</li>';
        echo '</ul><br>';
    }
    echo '</ul>';
}
