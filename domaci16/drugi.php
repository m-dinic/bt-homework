<?php

$brojevi = array(2,2,2);

$operacije = "/";

function operacije ($niz, $operacija) {
$mnozenje= 1;
$oduzimanje = $niz[0];
$deljenje = $niz[0];

if ($operacija == "-") {
for ($i = 1; $i < count($niz); $i++) {
    $oduzimanje -= $niz[$i];
} 
echo $oduzimanje;
} elseif ($operacija == "+") {
    echo array_sum($niz);
} elseif ($operacija == "*") {
    for ($i = 0; $i < count($niz); $i++) {
        $mnozenje *= $niz[$i];
    } 
    echo $mnozenje;
} elseif ($operacija == "/") {
    for ($i = 1; $i < count($niz); $i++) {
        $deljenje /= $niz[$i];
    } 
    echo $deljenje;
}
}

echo operacije($brojevi, "-");