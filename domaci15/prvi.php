<?php

$hwArray = array("Pera","Milka","Pera","Sonja","Danilo","Marica","Ivica","Sonja","Vanja","Mira"); 

print_r($hwArray);
echo "<br>";

if (array_search("Milos", $hwArray) == false) {
    array_push($hwArray, "Milos");
    print_r($hwArray);
    echo "<br>";
}

if (array_search("Marko", $hwArray) == false) {
    array_splice($hwArray, 2, 0, "Marko");
    print_r($hwArray);
    echo "<br>";
}

echo count($hwArray);
echo "<br>";

if (array_search("Jovana", $hwArray) == false) {
    array_unshift($hwArray, "Jovana");
    print_r($hwArray);
    echo "<br>";
}

//brisem Danila po vrednosti, ne po mestu [ali se gubi taj key]
if (($key = array_search("Danilo", $hwArray)) !== false) {
    unset($hwArray[$key]);
}

print_r($hwArray);
echo "<br>";

//vracam Danila da to uradim bez da izgubim i key
if (array_search("Danilo", $hwArray) == false) {
    array_splice($hwArray, 5, 0, "Danilo");
    print_r($hwArray);
    echo "<br>";
}

//brisem Danila bez gubljenja key-a
if (($key = array_search("Danilo", $hwArray)) !== false) {
    array_splice($hwArray, $key, 1);
}

print_r($hwArray);
echo "<br>";

$hwArray = array_unique($hwArray);
print_r($hwArray);
echo "<br>";