<?php

require_once dirname(__DIR__,1) . "../model/products_model.php";

$id = "";
$qty=0;
$id = $_GET["stranica"];
$product = getOneProductById($id);

$related = getRelatedByCategory($product['category'], $product['id']);

$qty = $_GET["qty"];
$id = $_GET["stranica"];
if ($qty==null) {
    $qty=0;

}

//HEADER
require dirname(__DIR__,1) . "/view/layout/v_header.php";

// PAGE
require dirname(__DIR__,1) . "/view/layout/v_single_product.php";

// FOOTER
require dirname(__DIR__,1) . "/view/layout/v_footer.php";

?>