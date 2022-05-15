<?php
$dan = intval($_GET['dan']);
$mesec = intval($_GET['mesec']);
$godina = intval($_GET['godina']);

$validan_datum = true;

//validacija da su uneseni brojevi
if ($dan <1 || $dan> 31) {
    echo "Unos za dan mora da bude broj izmedju 1 i 31";
    $validan_datum = false;
}
if ($mesec <1 || $mesec> 12) {
    echo "Unos za mesec mora da bude broj izmedju 1 i 12";
    $validan_datum = false;
}
if ($godina <1 || $godina> date("Y")) {
    echo "Unos za godinu ne moze da bude u buducnosti";
    $validan_datum = false;
}

//realna validacija datuma

//validacija prestupne godine
if ($godina % 4 ==0) {
    if ($dan > 29 && $mesec == 2) {
        echo "Unos za dane u mesecu februar u prestupnoj godini mora da bude broj izmedju 1 i 29";
        $validan_datum = false;
    }
} else {
    if ($dan > 28 && $mesec == 2) {
        echo "Unos za dane u mesecu februar mora da bude broj izmedju 1 i 28";
        $validan_datum = false;
    }
}

// validacija za sve ostale mesece
if ($mesec != 2) {
    if (($mesec < 8 && $mesec%2==0 && $dan>30) || ($mesec > 8 && $mesec%2!=0 && $dan>30)) {
        echo "Mesec mora da ima maximalno 30 dana";
        $validan_datum = false;
    } 
}

if ($validan_datum) {
    echo "Datum je validan. Uneseni datum je $dan/$mesec/$godina";
}


