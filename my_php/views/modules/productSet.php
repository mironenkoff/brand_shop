<section class="productSet clearfix">
    <h3 class="productSet__header productSet__header_1">Featured Items</h3>
    <h4 class="productSet__header productSet__header_2">Shop for items based on what we featured in this week</h4>
    
    <!-- Вставляем из main.js карточки товаров -->
    <!--Отключил JS, пишем php -->

    <?php
        $products = getProducts( $db );
        for ($i = 0; $i < $blckQuantity; $i++):
            $imgPath = $products[ $i ]["images_path"];
            $productName = $products[ $i ]["product_name"];
            $productPrice = $products[ $i ]["product_price"];
            $brand = $products[ $i ]["brand_name"]; ?>
        <div class="product clearfix">
            <a class="product__ref clearfix" href="../my_php/views/product.php">
                <div class="product__imgWrap">
                    <img class="product__img" src="../<?php echo $imgPath; ?>" alt="product 1">
                </div>
                <div class="product__descrWrap">
                    <h3 class="product__descr product__descr_default"><?php echo $brand . " " . $productName; ?></h3>
                    <h3 class="product__price product__price_red">$<?php echo $productPrice; ?></h3>
                </div>
            </a>

            <button class="button button_addToCart" id="">
                <img class="button__img_addToCart" src="img/toCart.png" alt="Add to cart">
                <span class="button__txt_addToCart">Add to Cart</span>
            </button>
        </div>
    <?php endfor; ?>
        
    <div class="productSet__btnWrap">
    <a class="button button_browseAll" href="##">
        <span class="button__txt_browseAll">Browse All Product</span>
        <span class="fa fa-long-arrow-right button__txt_arrow"></span>
    </a>
    </div>
</section>