<?php

$x = array(1, 2, 3);

$s = 1;

for ($i=0; $i<count($x); $i++) {
    $s = $s * $x[$i];
}

echo $s . "<br>";

$s= 0;

for ($i=0; $i<count($x); $i++) {
    if ($x[$i]%2 != 0) {
        $s++;
    }
}
echo $s . "<br><br>";

$s= 1;

for ($i=0; $i<count($x); $i++) {
    for ($y=$i+1; $y<count($x); $y++) {
        echo $x[$i]* $x[$y] . "<br>";
    }
}

