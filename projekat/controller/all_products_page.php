<?php

require_once  dirname(__DIR__,1) . "/model/products_model.php";

$filter = "";
$sort = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $filter = $_POST["filter"];
    $sort = $_POST["sort"];
}

$products = getAllProducts($sort);

if($filter != "") {
    $products = searchProductsByTerm($filter, $products);
}

//HEADER
require dirname(__DIR__,1) . "/view/layout/v_header.php";

// PAGE
require dirname(__DIR__,1) . "/view/layout/v_products.php";

// FOOTER
require dirname(__DIR__,1) . "/view/layout/v_footer.php";