<?php



function povrprav($a,$b){
    return round($a * $b, 2);
}

function povrkrug($r){
    return round($r**2 * pi(), 2);
}

function povrduguljasti($a,$b,$r){
    return round(povrprav($a,$b,$r) + povrkrug($r)/2, 2);
}


echo povrprav(5,2) . "<br>";

echo povrkrug(1) . "<br>";

echo povrduguljasti(5,2,1) . "<br>";



?>