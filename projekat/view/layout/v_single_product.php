<main>
    <div class="container col-sm-12 col-12 d-flex justify-content-between">
            <img class='col-sm-5 col-5' src="<?php echo htmlspecialchars($product['img']); ?>" alt="img">
            <div class="col-sm-4 col-5 d-inline mt-5">
            <ul>
            <li><h2><?php echo htmlspecialchars($product['title']); ?></h2></li>
            <li><h2><?php echo htmlspecialchars($product['price']); ?></h2></li>
            <li><h2><?php echo htmlspecialchars($product['brand']); ?></h2></li>
            <li><h2><?php echo htmlspecialchars($product['category']); ?></h2></li>
            </ul>
            <form action="single_product.php" method="get">
                <input hidden name="stranica" value="<?php echo htmlspecialchars($id)?>">
            <input oninput="this.form.submit()" name="qty" type="number" placeholder= "Input quantity" value="<?php echo htmlspecialchars($qty)?>"  defaultValue="0">
            <noscript><input type="submit" value="Submit"></noscript>
            </form>
            <a class="btn btn-success" href="./checkout_page.php?id=<?php echo htmlspecialchars($product['id']) . "&qty=" . $qty?>">Submit</a>  
            </div>

    </div>
        

 <div class="col-xs-12 col-12 mb-3 d-flex  justify-content-center">
<h4><?php echo htmlspecialchars($product['description']); ?></h4>

 </div>
 <div class="row m-5 ml-5">
            <?php foreach ($related as $proizvod) { ?>
            <article class="single-product col-12 col-sm-4 row mb-5">
                <div class='col-6 col-sm-6 float-left'>
                    <img class='col-sm-12 pr-8' src="<?php echo htmlspecialchars($proizvod['img']); ?>" alt="" width="100" height="100">
                    <span><?php echo htmlspecialchars($proizvod['title']); ?></span>
                </div>
                <div class='col-6 col-sm-6 float-right'>
                    <?php echo htmlspecialchars($proizvod['price']); ?>  eur
                    <a  <?php if ($proizvod['available']){ ?> class="btn btn-success" <?php   } else {
                        ?> class="btn btn-danger"  onclick="return false;" <?php }?> href="./single-product.php?stranica=<?php echo htmlspecialchars($proizvod['id']) ?>"><?php if ($proizvod['available']){ ?>Show product <?php   } else {
                            ?> Not in stock <?php }?></a>
                </div>
            </article>
            <?php } ?>
        </div>
       </div>
    </div>
</main>