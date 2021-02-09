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
        echo '<li>Size Rating:' . $row["size_rating"] . '</li>';
        echo '<li>Healthy Rating:' . $row["healthy_rating"] . '</li>';
        echo '<li>Delete?:' . $row["delete"] . '</li>';
        echo '</ul><br>';
    }
    echo '</ul>';
}

function showIndividual($allResults, $id){
    foreach ($allResults as $row) {
        $dbRowData = [
            'id' => $row["id"],
            'food' => $row["food"],
            'colour' => $row["colour"],
            'size' => $row["size_rating"],
            'healthy' => $row["healthy_rating"],
            'image' => $row['image_path'],
            'delete' => $row["delete"]];
                 if($id==$dbRowData['id']){
                    return $dbRowData;
                  }
        var_dump($dbRowData);
    }
}

//dbRowData[0] = $row["id"];
//dbRowData[1] = $row["food"];
//dbRowData[2] = $row["colour"];
//dbRowData[3] = $row["size_rating"];
//dbRowData[4] = $row["healthy_rating"];
//dbRowData[5] = $row["delete"];

//$id = $row["id"];
//$Food = $row["food"];
//$Colour_Rating = $row["colour"];
//$Size_Rating = $row["size_rating"];
//$Healthy_Rating = $row["healthy_rating"];
//$Delete = $row["delete"];
