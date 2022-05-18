<?php

$gender = "";
$married = false;

$data = array(
    array(
        "name" => "Pera",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => 7.5,
        "married" => false,
        "courses" => array(
            "laravel",
            "react",
            "jQuery"
        )
    ) ,
    array(
        "name" => "Pera1",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => 7.5,
        "married" => false,
        "courses" => array(
            "laravel",
            "react",
            "jQuery"
        )
    ) ,
    array(
        "name" => "Pera2",
        "last_name" => "Peric",
        "age" => 57,
        "gender" => "female",
        "avg_rating" => 7.5,
        "married" => false,
        "courses" => array(
            "laravel",
            "react",
            "jQuery"
        )
    ) ,
    array(
        "name" => "Pera3",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => 7,
        "married" => true,
        "courses" => array(
            "laravel",
            "react",
            "jQuery"
        )
    ) ,
    array(
        "name" => "Pera4",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "female",
        "avg_rating" => 7.5,
        "married" => true,
        "courses" => array(
            "laravel",
            "react",
            "jQuery"
        )
    ) ,
    array(
        "name" => "Pera5",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => 7.5,
        "married" => false,
        "courses" => array(
            "laravel",
            "react",
        )
    ) ,
        );

foreach ($data as $podatak)
{
    foreach ($podatak as $naziv => $vrednost)
    {
        if($naziv == "name") {
            $name = $vrednost;
        }
        if($naziv == "last_name") {
            $last_name = $vrednost;
        }
        if($naziv == "age") {
            $age = $vrednost;
        }
        if($naziv == "gender") {
            $gender = $vrednost;
        }
        if($naziv == "avg_rating") {
            $avg_rating = $vrednost;
        }
        if($naziv == "married") {
            $married = $vrednost;
        }
        if($naziv == "courses") {
            $courses = $vrednost;
        }
        if($gender == "male") {
            $ozenjen = "ozenjen";
        } else {
            $ozenjen = "udata";
        }
        if($married) {
            $jeste = "jeste";
        } else {
            $jeste = "nije";
        }
    
    }
    echo "$name $last_name ima $age godina i $jeste $ozenjen. Ima prosecnu ocenu $avg_rating, a kurseve koje trenutno slusa su: " . implode(", ",$courses) . ".";
    echo "<br>";
}

