<header>
    <a class="logo" href="index.php">
        <img class="logo__img" src="img/BranD_logo.png" alt="logoImage">
        <h1 class="logo__txt">BRAN<span class="logo__txt_lastLetter">d</span></h1>
    </a>
    <ul class="upperGroup">
        <li class="browseButton">Browse<span class="fa fa-caret-down"></span>
            <?php
            $subCategoryWomen = [ "Dresses", "Tops", "Sweaters/Knits", "Jackets/Coats",
                "Blazers", "Denim", "Leggings/Pants", "Skirts/Shorts", "Accessories" ];

            $subCategoryMan = [ "Tees/Tank tops", "Shirts/Polos", "Sweaters",
                "Sweatshirts/Hoodies", "Blazers", "Jackets/vests" ];

            $categoryItems = [ "WOMEN" => $subCategoryWomen, "MAN" => $subCategoryMan ];

            echo '<ul class="dropDown">';
                foreach ($categoryItems as $key => $value) {
                    echo ( '<li class="dropDown__category">' . $key );
                        echo '<ul class="dropDown__subCategory">';
                        foreach ($value as $internalValue) {
                            echo '<li>';
                                echo ('<a class="dropDown__subCategoryRef" href="#">'
                                        . $internalValue . '</a>' );
                            echo '</li>';
                        }
                        echo '</ul>';
                    echo '</li>';
                }
            echo '</ul>';
            ?>

        </li>
      <li class="searchField">
        <form action="#" name="search">
          <input type="search" placeholder="Search for item...">
          <button type="submit"><img src="img/search.png" alt="search"></button>
        </form>
      </li>
      <li><a class="myAccountBtn" href="#">My Account<span class="fa fa-caret-down"></span></a></li>
      <li><a class="myCartBtn" href="shoppingCart.php"><img src="img/cart.png" alt="My cart"></a></li>
    </ul>
</header>