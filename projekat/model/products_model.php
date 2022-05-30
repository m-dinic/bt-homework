<?php 

include "product_class.php";

define ("ORDER_BY_PRICE_ASC", 'price-asc');
define ("ORDER_BY_PRICE_DSC", 'price-desc');

function getAllProducts($sort = "") {
$products = [
	[
		"id" => 1,
        "title" => "AirMax",
		"description" => "Air max zlatne patike",
		"img" => "https://cdn.taf.si/media/catalog/product/cache/382907d7f48ae2519bf16cd5f39b77f9/D/A/DA9357-100-PHSRH000-2000.png",
        "price" => 200.22,
		"category" => "obuca",
		"brand" => "nike",
		"available" => true
    ],
    [
		"id" => 2,
        "title" => "Starke",
		"description" => "crne patike",
		"img" => "https://www.america-today.com/on/demandware.static/-/Sites-at-master-catalog/default/dw3ce13fb2/images/product/converse-all-stars-high-men-black-1512509031-100-f.png",
        "price" => 100.22,
		"category" => "obuca",
		"brand" => "converse",
		"available" => true
	],
	[
		"id" => 3,
        "title" => "Starke 2",
		"description" => "bele duboke patike",
		"img" => "https://www.america-today.com/on/demandware.static/-/Sites-at-master-catalog/default/dw3ce13fb2/images/product/converse-all-stars-high-men-black-1512509031-100-f.png",
        "price" => 115.22,
		"category" => "obuca",
		"brand" => "converse",
		"available" => true
	],
	[
		"id" => 4,
        "title" => "Starke 3",
		"description" => "crne duboke patike",
		"img" => "https://www.america-today.com/on/demandware.static/-/Sites-at-master-catalog/default/dw3ce13fb2/images/product/converse-all-stars-high-men-black-1512509031-100-f.png",
        "price" => 115.22,
		"category" => "obuca",
		"brand" => "converse",
		"available" => true
	],
	[
		"id" => 5,
        "title" => "Puma",
		"description" => "Crne patike",
		"img" => "https://www.n-sport.net/UserFiles/products/big/01/18/muske-patike-puma-caven-logomania-383857-01.jpg",
        "price" => 70.22,
		"category" => "obuca",
		"brand" => "puma",
		"available" => true
    ],
    [
		"id" => 6,
        "title" => "Adidas Superstar",
		"description" => "bele patike",
		"img" => "https://cdn.taf.si/media/catalog/product/cache/382907d7f48ae2519bf16cd5f39b77f9/G/Z/GZ3742_2_FOOTWEAR_Photography_Side_Lateral_View_transparent_13.png",
        "price" => 100.22,
		"category" => "obuca",
		"brand" => "adidas",
		"available" => true
	],
	[
		"id" => 7,
        "title" => "Lacoste",
		"description" => "bele plitke patike",
		"img" => "https://cdn.officeshoes.ws/product_images/2021ss/big/741sma0083-1r5.jpg",
        "price" => 130.22,
		"category" => "obuca",
		"brand" => "lacoste",
		"available" => true
	],
	[
		"id" => 8,
        "title" => "Starke 4",
		"description" => "zute patike",
		"img" => "https://www.america-today.com/on/demandware.static/-/Sites-at-master-catalog/default/dw3ce13fb2/images/product/converse-all-stars-high-men-black-1512509031-100-f.png",
        "price" => 100.00,
		"category" => "obuca",
		"brand" => "converse",
		"available" => true
	],
	[
		"id" => 9,
		"title" => "Starke 4",
		"description" => "roze patike",
		"img" => "https://www.america-today.com/on/demandware.static/-/Sites-at-master-catalog/default/dw3ce13fb2/images/product/converse-all-stars-high-men-black-1512509031-100-f.png",
        "price" => 100.00,
		"category" => "obuca",
		"brand" => "converse",
		"available" => false
    ],
    [
		"id" => 10,
        "title" => "Filla",
		"description" => "crne patike",
		"img" => "https://www.n-sport.net/UserFiles/products/big/01/21/zenske-patike-fila-strada-low-wmn-1010560-1FG.jpg",
        "price" => 40.22,
		"category" => "obuca",
		"brand" => "filla",
		"available" => true
	],
	[
		"id" => 11,
        "title" => "Crni air max duks",
		"description" => "pamucni duks",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CW5/CW5387-073/images/thumbs_900/CW5387-073_900_900px.jpg",
        "price" => 30.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 12,
        "title" => "Beli air max duks",
		"description" => "pamucni duks",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CW5/CW5387-073/images/thumbs_900/CW5387-073_900_900px.jpg",
        "price" => 30.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 13,
        "title" => "Rozi air max duks",
		"description" => "pamucni duks",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CW5/CW5387-073/images/thumbs_900/CW5387-073_900_900px.jpg",
        "price" => 30.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
    ],
    [
		"id" => 14,
        "title" => "Sivi air max duks",
		"description" => "pamucni duks",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CW5/CW5387-073/images/thumbs_900/CW5387-073_900_900px.jpg",
        "price" => 30.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 15,
        "title" => "Crni air max komplet",
		"description" => "pamucni komplet za trcanje",
		"img" => "https://www.djaksport.com/image.aspx?imageId=153521",
        "price" => 60.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 16,
        "title" => "Sivi air max komplet",
		"description" => "pamucni komplet za trcanje",
		"img" => "https://www.djaksport.com/image.aspx?imageId=153521",
        "price" => 60.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 17,
		"title" => "Rozi air max komplet",
		"description" => "pamucni komplet za trcanje",
		"img" => "https://www.djaksport.com/image.aspx?imageId=153521",
        "price" => 60.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
    ],
    [
		"id" => 18,
        "title" => "Crni air max donji deo",
		"description" => "pamucni donji deo",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CU6/CU6566-702/images/thumbs_900/CU6566-702_900_900px.jpg",
        "price" => 40.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 19,
        "title" => "Sivi air max donji deo",
		"description" => "pamucni donji deo",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CU6/CU6566-702/images/thumbs_900/CU6566-702_900_900px.jpg",
        "price" => 40.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => true
	],
	[
		"id" => 20,
		"title" => "Zuti air max donji deo",
		"description" => "pamucni donji deo",
		"img" => "https://www.buzzsneakers.com/files/thumbs/files/images/slike-proizvoda/media/CU6/CU6566-702/images/thumbs_900/CU6566-702_900_900px.jpg",
        "price" => 40.22,
		"category" => "odeca",
		"brand" => "nike",
		"available" => false
	],
	[
		"id" => 21,
        "title" => "Skije",
		"description" => "Skije visine 151",
		"img" => "https://www.intersport.rs/media/catalog/product/cache/382907d7f48ae2519bf16cd5f39b77f9/a/m/amphibio_18_ti2_fusionx_fx_blk_-_centr.blk_-_lifter_grn_gfq.png",
        "price" => 200.22,
		"category" => "sportska oprema",
		"brand" => "blizzard",
		"available" => true
    ],
    [
		"id" => 22,
        "title" => "Skije",
		"description" => "Skije visine 167",
		"img" => "https://www.intersport.rs/media/catalog/product/cache/382907d7f48ae2519bf16cd5f39b77f9/a/m/amphibio_18_ti2_fusionx_fx_blk_-_centr.blk_-_lifter_grn_gfq.png",
        "price" => 300.22,
		"category" => "sportska oprema",
		"brand" => "blizzard",
		"available" => true
	],
	[
		"id" => 23,
        "title" => "Lopta",
		"description" => "Odbojkaska lopta",
		"img" => "https://www.sportvision.rs/files/thumbs/files/images/slike_proizvoda/media/V33/V330W/images/thumbs_600/V330W_600_600px.jpg",
        "price" => 70.22,
		"category" => "sportska oprema",
		"brand" => "mikasa",
		"available" => true
	],
	[
		"id" => 24,
		"title" => "lopta",
		"description" => "Kosarkaska lopta",
		"img" => "https://www.djaksport.com/image.aspx?imageId=185322",
        "price" => 80.22,
		"category" => "sportska oprema",
		"brand" => "mikasa",
		"available" => true
	],
	[
		"id" => 25,
        "title" => "Reket",
		"description" => "Teniski reket",
		"img" => "https://urosevesprave.rs/slike/decembar2010/Reflex.jpg",
        "price" => 150.22,
		"category" => "sportska oprema",
		"brand" => "nike",
		"available" => true
    ],
];

if ($sort == ORDER_BY_PRICE_ASC) {
	usort($products, function ($a, $b) {
		return $a['price'] - $b['price'];
	});
} else if ($sort == ORDER_BY_PRICE_DSC) {
	usort($products, function ($a, $b) {
		return $b['price'] - $a['price'];
	});
}
return $products;
}

function getOneProductById($id) {
	$all_products = getAllProducts();
	foreach ($all_products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getNextProduct($current_product) {
	$all_products = getAllProducts();
	for ($i=0; $i<count($all_products); $i++) {
		if ($all_products[$i]['id']==$current_product) {
			if ($i == count($all_products)-1) {
				return $all_products[0];
			} else {
				return $all_products[$i+1];
			}
		}

	}

}

function getPrevProduct($current_product) {
	$all_products = getAllProducts();
	for ($i=0; $i<count($all_products); $i++) {
		if ($all_products[$i]['id']==$current_product) {
			if ($i == 0) {
				return $all_products[count($all_products)-1];
			} else {
				return $all_products[$i-1];
			}
		}

	}
}

function searchProductsByTerm($term = "", $all_products = []) {
	if (count($all_products) == 0) {
		$all_products = getAllProducts();
	}
	$filter_products = [];
	foreach ($all_products as $product) {
		if(str_contains($product['title'], $term) || str_contains($product['brand'], $term) || str_contains($product['description'] , $term)) {
            $filter_products[] = $product;
        }
    }

    return $filter_products;

}

function getRelatedByCategory($category, $id) {
    $related = [];
    $all_products = getAllProducts();
    foreach ($all_products as  $product) {
        if($product['category'] == $category && $id != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}

?>