<?php
       $name =$_GET["name"];
       $surname = $_GET["surname"];
       $gender = $_GET["gender"];
       $email = $_GET["email"];
       $pass = $_GET["pass"];
       $courses = $_GET["courses"];
      $postovani = "";

      if ($gender == "Men") {
        $postovani = "Postovani";
      } else if ($gender = "Women") {
        $postovani = "Postovana";
      }

      echo "$postovani  $name  $surname, 	Uspesno ste se registrovali na nasem sajtu. <br>";
      echo "Vasa lozinka je: $pass </br>";
      echo "Vas username je: $email </br>";

      if (isset($courses)) {
        echo "Vasi odabrani kursevi su: <br>";
        echo implode(",", $courses);
    } else {
        echo "Niste odabrali kurs. Molimo odaberite kurs sa spiska. ";
    }

    ?>