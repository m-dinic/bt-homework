<html>
    <head>
        <title>Prvi PHP</title>
    </head>
    <body>
        <?php

        $a=7;
        $b=12;
        $c=17;

        if($a>$b && $a>$c){
            echo $a;
        } else if ($b>$a && $b>$c) {
            echo $b;
        } else {
            echo $c;
        }
        
        ?>
    </body>
</html>