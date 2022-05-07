<?php
       $name =$_GET["fname"];
       $surname = $_GET["lname"];
       $email = $_GET["email"];
       $message = $_GET["subject"];

      echo "Postovani  $name  $surname, 	Uspesno ste nas kontaktirali sa porukom: $message <br>";
    ?>