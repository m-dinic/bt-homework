<?php
    $sir_zid= $_POST["sir_zid"];
    $vis_zid= $_POST["vis_zid"];
    $sir_ploc= $_POST["sir_ploc"];
    $vis_ploc= $_POST["vis_ploc"];

    $zid_pov= $sir_zid * $vis_zid;

    $ploc_pov= $sir_ploc * $vis_ploc;

    $br_ploc= round($zid_pov / $ploc_pov, 2);

    $hor_br_ploc= $sir_zid / $sir_ploc;

    $hor_br_ploc_form= ceil($hor_br_ploc);

    $ver_br_ploc= $vis_zid / $vis_ploc;

    $ver_br_ploc_form= ceil($ver_br_ploc);

    $skart_metod_br= $hor_br_ploc_form * $ver_br_ploc_form;

    //Ovo je matematicki tacno

    if ($zid_pov<$ploc_pov){
        echo "Zid ne moze biti manje povrsine od povrsine plocice";
    } else{
        echo "Potrebno je " . $br_ploc ." plocica." . "<br>";
    }
    echo "<hr>";
    // Ako uzmemo skart u obzir

    echo "Ako uzmemo skart u obzir potrebno nam je " . $skart_metod_br . " plocica";
    







?>