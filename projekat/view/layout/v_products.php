<main>
    <div class="container">
        <form class="row" action="./all_products_page.php" method="post">
            <select name="sort" id="" class="col-3">
                <option value="">None</option>
                <option value=<?php echo ORDER_BY_PRICE_ASC; ?>>By price asc</option>
                <option value=<?php echo ORDER_BY_PRICE_DSC; ?>>By price desc</option>
            </select>
            <input class="col-7" type="text" name="filter" value=<?php echo $filter; ?>>
            <button type="submit" class="btn btn-warning col-2">Search</button>
        </form>
        <div class="row m-5">
            <?php foreach ($products as $product) { ?>
            <article class="single-product col-12 col-sm-4 row mb-5">
                <div class='col-6 col-sm-6 float-left'>
                    <img class='col-sm-12 pr-8' src="<?php echo htmlspecialchars($product['img']); ?>" alt="" width="100" height="100">
                    <span><?php echo htmlspecialchars($product['title']); ?></span>
                </div>
                <div class='col-6 col-sm-6 float-right'>
                    <?php echo htmlspecialchars($product['price']); ?>  eur
                    <a  <?php if ($product['available']){ ?> class="btn btn-success" <?php   } else {
                        ?> class="btn btn-danger"  onclick="return false;" <?php }?> href="./single_product.php?stranica=<?php echo htmlspecialchars($product['id']) . "&qty=0"?>"><?php if ($product['available']){ ?>Show product <?php   } else {
                            ?> Not in stock <?php }?></a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>