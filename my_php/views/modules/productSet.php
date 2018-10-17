<section class="productSet clearfix">
    <h3 class="productSet__header productSet__header_1">Featured Items</h3>
    <h4 class="productSet__header productSet__header_2">Shop for items based on what we featured in this week</h4>
    
    <?php // $products = getProducts( $db ); ?>
    <?php $_SESSION[ 'products' ] = getProducts( $db ); ?>
    <?php // print_r($_SESSION); ?>
    <?php for ( $i = 4; $i < 12; $i++ ): ?>
        <?php
//            $imgPath = $products[ $i ]["images_path"];
//            $productID = $products[ $i ]["product_ID"];
//            $productName = $products[ $i ]["product_name"];
//            $productPrice = $products[ $i ]["product_price"];
//            $brand = $products[ $i ]["brand_name"];
            $imgPath = $_SESSION[ 'products' ][ $i ]["images_path"];
            $productID = $_SESSION[ 'products' ][ $i ]["product_ID"];
            $productName = $_SESSION[ 'products' ][ $i ]["product_name"];
            $productPrice = $_SESSION[ 'products' ][ $i ]["product_price"];
            $brand = $_SESSION[ 'products' ][ $i ]["brand_name"];
            
        ?>
        <div class="product clearfix">
            <a target="_blanc" class="product__ref clearfix" href="?action=goToProduct&id=<?php echo $productID; ?>">
                <div class="product__imgWrap">
                    <img class="product__img" src="../<?php echo $imgPath; ?>" alt="product 1">
                </div>
                <div class="product__descrWrap">
                    <h3 class="product__descr product__descr_default"><?php echo $brand . " " . $productName; ?></h3>
                    <h3 class="product__price product__price_red">$<?php echo $productPrice; ?></h3>
                </div>
            </a>
            <button class="button button_addToCart">
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