<?php

$emails = array ("mail1@mail.com","mail2@mail.com","mail3@mail.com","nije mail 1", "nije mail 2");

print_r($emails);
echo "<br>";

function provera($string) {
    $jeste_email = false;
    $ima_majmunce = str_contains($string, "@");
    $ima_tacku = str_contains($string, ".");
    if ($ima_majmunce && $ima_tacku) {
        if ((strpos($string, "@") < strpos($string, "."))) {
            $jeste_email = true;
        }
    }
    return $jeste_email;
}


function filtriranje($niz) {
    return array_filter($niz, "provera");
}

print_r(filtriranje($emails));