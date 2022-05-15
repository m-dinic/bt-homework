<?php

$ukupno = intval($_GET['ukupno']);
$potrosnja = intval($_GET['potrosnja']);
$ostatakGorivaFlag = isset($_GET['ostatak']);

$brojKamionaKojiMoguDaPredjuRutu= floor($ukupno/$potrosnja);
$ostatakGoriva= $ukupno%$potrosnja;

if ($ostatakGorivaFlag) {
    echo "Ostatak goriva je $ostatakGoriva litara.";
} else {
    echo "Ukupan broj kamiona koji mogu da predju rutu je $brojKamionaKojiMoguDaPredjuRutu.";
}