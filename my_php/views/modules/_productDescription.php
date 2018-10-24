<section class="productDescription clearfix">
    <h3><?php echo $categoryName ?></h3>
    <div class="productDescription__selectorField">
        <div class="productDescription__selector"></div>
    </div>
    <h4><?php echo $brand; ?> <?php echo $productName; ?></h4>
    <p>
        <?php echo $descr; ?>
        Compellingly actualize fully researched processes before
        proactive outsourcing. Progressively syndicate
        collaborative architectures before cutting-edge services.
        Completely visualize parallel core competencies rather
        than exceptional portals.
    </p>
    <div class="productDescription__material">
        MATERIAL&colon; <span><?php echo $material; ?></span>
    </div>
    <div class="productDescription__designer">
        DESIGNER&colon; <span><?php echo $designer; ?></span>
    </div>
    <h5>$ <?php echo $price; ?></h5>
    <div class="productDescription__separator"></div>
    <form class="productDescription__form clearfix">
        <div>
            <label>CHOOSE COLOR</label>
            <select name="color" size="1" id="#">
                <option value="red">
                    Red
                </option>
                <option value="blue">
                    Blue
                </option>
                <option value="green">
                    Green
                </option>
            </select>
        </div>
        <div>
            <label>CHOOSE SIZE</label>
            <select name="size" size="1" id="#">
                <option value="S">
                    S
                </option>
                <option value="M">
                    M
                </option>
                <option value="L">
                    L
                </option>
                <option value="XL">
                    XL
                </option>
                <option value="XXL">
                    XXL
                </option>
                <option value="XXXL">
                    XXXL
                </option>
            </select>
        </div>
        <div>
            <label>QUANTITY</label>
            <input type="number" name="quantity"
                   min="1" max="1000" value="1">
        </div>
        <button>
            <img src="img/addToCart_red.png" alt="Add to cart"/>
            <span>Add To Card</span>
        </button>
    </form>
</section>