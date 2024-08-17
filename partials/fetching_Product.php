<?php include "php/productInsert.php"?>
<?php while($products = mysqli_fetch_assoc($result)){ ?>


<div class="pro">
    <div style="height:70%;">
        <img src="img/products/<?php echo $products["product_image"] ?>" alt>
    </div>
<div class="desc">
        <span><?php echo $products["product_brand"] ?></span>
        <h5><?php echo $products["product_name"] ?></h5>
        <div class="star"></div>
        <?php
            for($star = 1;$star <= $products["product_rating"];$star++){
                echo '
                    <i class="fas fa-star"></i>
                ';
            }
        
        ?>
        <h4><?php echo $products["product_price"]?>$</h4>

    </div>

    <a id="nowheer">
        <i class="fal fa-cart-shopping"></i>
    </a>

</div>
<?php }?>