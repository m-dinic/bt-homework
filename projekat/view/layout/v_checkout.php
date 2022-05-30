<main>
    <div class="container col-12">
        <div class="row">
            <div class="col-xs-6 col-6 mb-3">
            <form action="checkout_page.php" method="post">
                <input class="col-9 mb-3 rounded" type="text" name="name" placeholder="Name" required><br>
                <input class="col-9 mb-3 rounded" type="text" name="l_name" placeholder="Last name" required><br>
                <input class="col-9 mb-3 rounded" type="email" name="email" placeholder="Email" required><br>
                <input class="col-4 mb-3 rounded" type="text" name="city" placeholder="City" required>
                <input class="col-4 mb-3 rounded" type="phone" name="phone" placeholder="Phone" required><br>
                <input class="col-4 mb-3 rounded" type="text" name="steet" placeholder="Street address" required>
                <input class="col-4 mb-3 rounded" type="number" name="zip" placeholder="Zip code" required><br>
                <textarea class="col-12 mb-3 rounded"name="comment" rows="4" cols="50"></textarea><br>
                <input id="check" class="col-1 rounded" type="checkbox" required><label for="check">Da li se slazete sa pravilima</label><br>
                <input hidden name="id" value="<?php echo htmlspecialchars($id);?>">
                <input hidden name="qty" value="<?php echo htmlspecialchars($qty);?>">
                <input type="submit" name="submit" value="Submit">  
            </form>
            </div>
            <div class="col-xs-1 col-1 mb-3">
            </div>
            <div class="col-5">
                <div  class="col-xs-12 col-12 mb-1">
                    <img src="<?php echo htmlspecialchars($product['img']);?>" class=" col-xs-3 col-3" alt="img" width="150" height="150">
                    <h3 style="display:inline; margin-left:10%;"><?php echo htmlspecialchars($product['title']);?></h3>
                    <h3 style="display:inline"><?php echo '* ' . htmlspecialchars($qty) .' PC' ;?></h3>
                </div>
                <div  class="col-xs-12 col-12 mb-3">
                   <h3><?php echo 'Price per piece: ' . htmlspecialchars($product['price']) .' euro';?></h3>
                </div>
                <div  class="col-xs-12 col-12 mb-3">
                    <h3><?php echo 'Total: ' . htmlspecialchars($product['price']*$qty) .' euro';?></h3>
                </div>
                </div>
                <div>
                </div>
            </div>
       </div>
    </div>
</main>