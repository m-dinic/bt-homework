<?php
$niz = array ( 
    array("ime"=>"Milos","prezime"=>"Dinic","godine"=>"28"),
    array("ime"=>"Milos","prezime"=>"Dinic","godine"=>"28"),
    array("ime"=>"Milos","prezime"=>"Dinic","godine"=>"28"),
    array("ime"=>"Milos","prezime"=>"Dinic","godine"=>"28"),
);

function kljuc($kljuc, $niz) {
    foreach ($niz as $key) {
if (array_key_exists($kljuc,$niz)) {
    echo "Kljuc postoji";
} else {
    echo "Kljuc ne postoji";
}
    }
}


echo kljuc("ime", $niz);
?>

