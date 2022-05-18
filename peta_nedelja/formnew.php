<?php


$array = array(56, 25, 33, 22, 123);

foreach ($array as $index=>$element) {
    if ($element%2==0) {
        echo $index . "<br><br>";
    }
}

$niz= array();


function random_niz($duzina_niza) {
    $niz= array();

for ($i=0; $i<$duzina_niza;$i++) {
    $niz[$i]= rand(20,80);
}

print_r($niz) . "<br>";
}

random_niz(10);

function par_nepar(array $niz) {
    $broj_parnih= 0;
    $broj_neparnih= 0;
    for ($i=0; $i<count($niz); $i++) {
        if ($niz[$i]%2==0) {
            $broj_parnih++;
        } else {
            $broj_neparnih++;
        }
    }
    if ($broj_parnih>$broj_neparnih) {
        echo "Ima vise parnih <br>";
    } elseif ($broj_parnih<$broj_neparnih) {
        echo "Ima vise neparnih <br>";
    } else {
        echo "Broj jednak <br>";
    }
}

echo "<br>";

$niz1= array(5,8,6,15,13,28,33);

$niz2= array(2,2,3,3);

$niz3= array(2,4,6,7);

par_nepar($niz1);

par_nepar($niz2);

par_nepar($niz3);


function zbir3 (array $niz) {
    $sum= 0;
    for ($i=0; $i<count($niz); $i++) {
        if ($niz[$i]%10==3) {
            $sum+= $niz[$i];
        } 
    }
    echo $sum . "<br>";
        
}

$niz4= array(13,10,23,33,40);

zbir3($niz4);


function nacrtaj_tabelu(int $kolona, int $red) {
    echo "<br>";
    $matrica= array();
    echo "<table><tr></tr></thead><tbody>";

    for ($i=0; $i<$kolona; $i++) {
        echo "<tr><td> $i </td>";
       $matrica[$i] = rand(0,15);
       echo "<td> $matrica[$i] </td></tr>";
    }
    echo "</tbody></table>";
}

nacrtaj_tabelu(2,2);

function nacrtaj_matricu_kao_tabelu(array $final_array) {
    echo "<table><tr></tr></thead><tbody>";
    foreach ($final_array as $row_array) {
        echo '<tr>';
        foreach ($row_array as $key1 => $value1) {
            echo '<td>' . $value1 . '</td>';    
        }
        echo '<tr>';
    }
    echo "</tbody></table>";
}

function napravi_tabelu(int $kolona, int $red) {
    echo "<br>";
    $array[] = [];

    for ($i = 0; $i < $kolona; ++$i) {      
        $array[$i] = [];  
        for ($j = 0; $j < $red; ++$j) {
            if ($j==0) {
                $array[$i][$j] = $i;
            } else {
                $random = rand(0,15);
                $array[$i][$j] = $random;
            }
        }
    }
    nacrtaj_matricu_kao_tabelu($array);
}

napravi_tabelu(15,15);


function sah_tabla(int $kolona, int $red) {
    echo "<br>";
    $array[] = [];

    for ($i = 1; $i < $kolona; ++$i) {      
        $array[$i] = [];  
        for ($j = 0; $j < $red; ++$j) {
            if ($j==0) {
                $array[$i][$j] = $i;
            } elseif ($i==1) {
                $array[$i][$j] = "A";
            }
            else {
                if($i %2 == 0 && $j%2 ==0) {
                    $array[$i][$j] = "belo";
                } else if ($i %2 != 0 && $j%2 !=0) {
                    $array[$i][$j] = "belo";
                }else {
                    $array[$i][$j] = "crno";
                }
            }
        }
    }
    nacrtaj_matricu_kao_tabelu($array);
}

sah_tabla(9,8);

