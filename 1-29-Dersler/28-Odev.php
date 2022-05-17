<!--
               ODEV
-->

<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function rastegele($array, $value){

    $filteredArray = array_filter($array);
    $randomizedArray = array_rand($filteredArray, $value);
    $result = array_map(function ($item) use ($filteredArray) {
        return $filteredArray[$item];
    }, $randomizedArray);
    return $result;

}

echo "<pre>";
print_r(rastegele($planets, 2));
print_r(rastegele($planets, 3));
print_r(rastegele($planets, 2));
print_r(rastegele($planets, 4));
print_r(rastegele($planets, 5));

?>