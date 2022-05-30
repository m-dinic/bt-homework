<?php
//funkcija za filtriranje po imenu i prezimenu

function filter_array($array,$term){
    $matches = array();
    foreach($array as $a){
        if(str_contains($a['name'],$term) || str_contains($a['surname'],$term))
            $matches[]=$a;
    }
    return $matches;
}

//funkcija za stampanje niza

function prikaz($niz) {
    echo "<table border=1>";
    foreach ($niz as $podatak) {
    foreach ($podatak as $naziv => $vrednost) {
        echo "<tr><th>$naziv</th><td>$vrednost</td></tr>";
    }
} echo "</table>";
}

$users = array(
    "user_1" => array("name" => "Pera",
                      "surname" => "Peric",
                      "img" => "img_pera",
                     ),
    "user_2" => array("name" => "Marko",
                      "surname" => "Markovic",
                     "img" => "img_marko",
                     ),
    "user_3" => array("name" => "Nikola",
                      "surname" => "Nikolic",
                      "img" => "img_nikola",
                     )
);

$searchContent = "ic";

$filtriran_niz = filter_array($users,$searchContent);

$filtriran_niz_stampa = prikaz($filtriran_niz);

echo $filtriran_niz_stampa;
