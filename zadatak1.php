<?php
$name = $_POST["name"];
$weight = $_POST["weight"];
$profession = $_POST["profession"];
$age = $_POST["age"];
$ac = "";
$ag = "";


if ($profession == "programer" || $profession == "administrativni radnik" || $profession == "menadzer") {
    $ac = "100";
} elseif ($profession == "policajac" || $profession == "vojnik") {
    $ac = "200";
} elseif ($profession == "sportista") {
    $ac = "300";
} else {
    $ac = "150";
}

if ($age >= "0" && $age <= "3"){
     $ag = "1.9";
}elseif ($age >= "4" && $age <= "10"){
    $ag = "1.5";
}elseif ($age >= "11" && $age <= "18"){
     $ag= "1.2";
}elseif ($age >= "19" && $age <= "26"){
     $ag = "1";
}elseif (($age >= "27" && $age <= "30") || ($age >= "50" && $age <= "60")){
     $ag = "0.8";
}elseif (($age >= "31" && $age <= "35") || ($age >= "45" && $age <= "49")){
     $ag = "0.7";
}elseif (($age >= "36" && $age <= "44") || ($age >= "60")){
     $ag = "0.6";
}

$cal = $weight*$ac*$ag;

echo $cal;
?>