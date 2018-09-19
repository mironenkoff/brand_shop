<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="styles/mystyle.css" rel="stylesheet" type="text/css">
    <link href="img/BranD_logo.png" rel="icon" type="image/x-icon">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="js/cart.js" defer></script>
  </head>
  <body>
    <div class="container clearfix">
      <header><a class="logo" href="index.php"><img class="logo__img" src="img/BranD_logo.png" alt="logoImage">
          <h1 class="logo__txt">BRAN<span class="logo__txt_lastLetter">d</span></h1></a>
        <ul class="upperGroup">
          <li class="browseButton">Browse<span class="fa fa-caret-down"></span><?php
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
      <nav class="nav">
        <ul class="nav__refSet">
          <li class="nav__item"><a class="nav__ref" href="index.php">HOME</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">MAN</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">WOMEN</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">KIDS</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">ACCESSORIES</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">FEATURED</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">HOT DEALS</a></li>
        </ul>
      </nav>
        <a class="newArrivals" href="##">
        <h2 class="newArrivals__title">NEW ARRIVALS</h2>
        <h3 class="newArrivals__path">HOME/MAN/<span class="newArrivals__path newArrivals__path_red">NEW ARRIVALS</span></h3></a>
      <div class="cartContent"></div>
      <button id="clearCart">CLEAR SHOPPING CART</button><a id="continueShopping" href="index.php">CONTINUE SHOPPING</a>
      <form class="checkOutForm" action="">
        <div class="checkOutForm__address">
          <h2>SHIPPING ADDRESS</h2>
          <select name="shippingCountry">
            <option>Bangladesh</option>
            <option>Russia</option>
            <option selected>USA</option>
            <option>Australia</option>
            <option>Czech Respublic</option>
            <option>Germany</option>
          </select>
          <input name="shippingState" type="text" placeholder="State">
          <input name="shippingZip" type="text" placeholder="Postcode/Zip">
          <button name="getAQuote">GET A QUOTE</button>
        </div>
        <div class="checkOutForm__discount">
          <h2>COUPON DISCOUNT</h2>
          <h3>Enter you coupon code if you have one</h3>
          <input name="couponCode" type="text" placeholder="Coupon code number">
          <button name="applyCoupon">APPLY COUPON</button>
        </div>
        <div class="checkOutForm__proceed">
          <h3>TOTAL<span id="cartTotal">$ ---</span></h3>
          <h2>GRAND TOTAL<span id="grandTotal">$ ---</span></h2>
          <hr>
          <button class="button" name="proceed">PROCEED TO CHECKOUT</button>
        </div>
      </form>
      <footer class="footer clearfix">
        <section class="subscribe clearfix">
          <div class="subscribeBg"></div>
          <div class="subscribe__slider"><img class="subscribe__sliderImg" src="img/subscrSliderImg.png" alt="stuff face">
            <div class="subscribe__sliderTxt">
              <h2>
                "Vestibulum quis porttitor dui! Quisque viverra nunc mi, 
                a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium"
              </h2>
              <h3>Bin Burhan</h3>
              <h4>Dhaka, Bd</h4>
            </div>
          </div>
          <div class="subscribe__area">
            <div class="subscribe__areaTxt">
              <p class="subscribe__areaTxt1">SUBSCRIBE</p>
              <p class="subscribe__areaTxt2">FOR OUR NEWLETTER AND PROMOTION</p>
            </div>
            <form class="subscribe__form" action="#" name="subscribeForm">
              <input type="email" placeholder="Enter your e-mail">
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </section>
        <section class="bottomMenu clearfix">
          <div class="bottomMenu__comment">
            <div class="logo logo_bottom"><img class="logo__img" src="img/BranD_logo.png" alt="logoImage">
              <h1 class="logo__txt">BRAN<span class="logo__txt_lastLetter">d</span></h1>
            </div>
            <div class="bottomMenu__text">
              <p>
                Objectively Objectively transition extensive data rather than cross functional
                solutions. Monotonectally syndicate multidisciplinary materials before
                go forward benefits. Intrinsicly syndicate an expanded array of
                processes and cross-unit partnerships. 
              </p>
              <p>
                Efficiently plagiarize 24/365 action items and focused infomediaries.
                Distinctively seize superior initiatives for wireless technologies.
                Dynamically optimize.
                
              </p>
            </div>
          </div>
          <nav class="bottomMenu__nav">
            <div class="bottomMenu__column">
              <h2>COMPANY</h2>
              <ul>
                <li><a class="bottomMenu__ref" href="##">Home</a></li>
                <li><a class="bottomMenu__ref" href="##">Shop</a></li>
                <li><a class="bottomMenu__ref" href="##">About</a></li>
                <li><a class="bottomMenu__ref" href="##">How It Works</a></li>
                <li><a class="bottomMenu__ref" href="##">Contact</a></li>
              </ul>
            </div>
            <div class="bottomMenu__column">
              <h2>INFORMATION</h2>
              <ul>
                <li><a class="bottomMenu__ref" href="##">Terms &amp; Condition</a></li>
                <li><a class="bottomMenu__ref" href="##">Privacy Policy</a></li>
                <li><a class="bottomMenu__ref" href="##">How to Buy</a></li>
                <li><a class="bottomMenu__ref" href="##">How to Sell</a></li>
                <li><a class="bottomMenu__ref" href="##">Promotoin</a></li>
              </ul>
            </div>
            <div class="bottomMenu__column">
              <h2>SHOP CATEGORY</h2>
              <ul>
                <li><a class="bottomMenu__ref" href="##">Men</a></li>
                <li><a class="bottomMenu__ref" href="##">Women</a></li>
                <li><a class="bottomMenu__ref" href="##">Child</a></li>
                <li><a class="bottomMenu__ref" href="##">Apparel</a></li>
                <li><a class="bottomMenu__ref" href="##">Browse All</a></li>
              </ul>
            </div>
          </nav>
        </section>
        <section class="socials">
          <p>&copy; Brand All Rights Reserved</p>
          <ul>
            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="https://www.plus.google.com" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          </ul>
        </section>
      </footer>
    </div>
  </body>
</html>