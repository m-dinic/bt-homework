<?php

require_once  dirname(__DIR__,1) . "/model/products_model.php";

$id = "";
$qty=0;

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $qty = $_GET["qty"];
}

$product = getOneProductById($id);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $qty = $_POST["qty"];
    $id = $_POST["id"];
    
    $product = getOneProductById($id);

    echo "Postovani/a," . $name . " ,uspesno ste kupili: " . $qty . " proizvoda po ceni: " . $product['price'] . " sa sumom " . $qty*$product['price'] . 
    " na email adresu: " . $email . " poslat racun. ";
}

//HEADER
require dirname(__DIR__,1) . "/view/layout/v_header.php";

// PAGE
require dirname(__DIR__,1) . "/view/layout/v_checkout.php";

// FOOTER
require dirname(__DIR__,1) . "/view/layout/v_footer.php";