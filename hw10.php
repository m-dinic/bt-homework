<html>

<head>
    <title>hw10.php - MD</title>
</head>

<body>
    <?php
    $var1 = 200;
    $var2 = 80;

    $a = 3;
    $b = 7;
    $c = 5;

    //Prvi zadatak

    echo "Zbir je: " . $var1 + $var2;

    echo "<br>";

    echo "Proizvod je: " . $var1 * $var2;

    echo "<br>";

    echo "Razlika je: " . $var1 - $var2;

    echo "<br>";

    echo "Kolicnik je: " . $var1 / $var2;

    echo "<br>";
    echo "<br>";
    //Drugi zadatak
    $rand = rand(0, 6);
    if ($rand == 0) {
        echo "Danas je ponedeljak";
    } elseif ($rand == 1) {
        echo "Danas je utorak";
    } elseif ($rand == 2) {
        echo "Danas je sreda";
    } elseif ($rand == 3) {
        echo "Danas je cetvrtak";
    } elseif ($rand == 4) {
        echo "Danas je petak";
    } elseif ($rand == 5) {
        echo "Danas je subota";
    } else {
        echo "Danas je nedelja";
    }
    echo "<br>";
    echo "<br>";
    //Treci zadatak

    echo "Zbir brojeva $a, $b i $c je: " . $a + $b + $c;

    ?>





</body>

</html>