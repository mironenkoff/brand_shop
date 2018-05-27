<!DOCTYPE html>
<html>
  <head>
    <title>BranD main</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="styles/mystyle.css" rel="stylesheet" type="text/css">
    <link href="img/BranD_logo.png" rel="icon" type="image/x-icon">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="js/main.js" defer></script>
  </head>
  <body>
    <div class="container clearfix">
      <header><a class="logo" href="index.html"><img class="logo__img" src="img/BranD_logo.png" alt="logoImage">
          <h1 class="logo__txt">BRAN<span class="logo__txt_lastLetter">d</span></h1></a>
        <ul class="upperGroup">
          <li class="browseButton">Browse<span class="fa fa-caret-down"></span>
            <ul class="dropDown">
              <li class="dropDown__category">WOMEN
                <ul class="dropDown__subCategory">
                  <li><a class="dropDown__subCategoryRef" href="#">Dresses</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Tops</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Sweaters/Knits</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Jackets/Coats</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Blazers</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Denim</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Leggings/Pants</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Skirts/Shorts</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Accessories</a></li>
                </ul>
              </li>
              <li class="dropDown__category">MAN
                <ul class="dropDown__subCategory">
                  <li><a class="dropDown__subCategoryRef" href="#">Tees/Tank tops</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Shirts/Polos</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Sweaters</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Sweatshirts/Hoodies</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Blazers</a></li>
                  <li><a class="dropDown__subCategoryRef" href="#">Jackets/vests</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="searchField">
            <form action="#" name="search">
              <input type="search" placeholder="Search for item...">
              <button type="submit"><img src="img/search.png" alt="search"></button>
            </form>
          </li>
          <li><a class="myAccountBtn" href="#">My Account<span class="fa fa-caret-down"></span></a></li>
          <li><a class="myCartBtn" href="shoppingCart.html"><img src="img/cart.png" alt="My cart"></a></li>
        </ul>
      </header>
      <nav class="nav">
        <ul class="nav__refSet">
          <li class="nav__item"><a class="nav__ref" href="index.html">HOME</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">MAN</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">WOMEN</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">KIDS</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">ACCESSORIES</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">FEATURED</a></li>
          <li class="nav__item"><a class="nav__ref" href="#">HOT DEALS</a></li>
        </ul>
      </nav>
      <div class="slider"><a href="#"><img class="slider__img" src="img/sliderImg.png" alt="slider image1">
          <div class="slider__txt">
            <p class="slider__txt1">THE BRAND</p>
            <p class="slider__txt2">OF LUXERIOUS FASHION</p>
          </div></a></div>
      <section class="category">
        <div class="category__banner category__banner_ForMen">
          <div class="category__img"><img src="img/categoryForMen.png" alt="For Men"></div>
          <div class="category__badge category__badge_ForMen">
            <h2>HOT DEAL</h2>
            <h3>FOR MEN</h3>
          </div>
        </div>
        <div class="category__banner category__banner_ForWoman">
          <div class="category__img"><img src="img/categoryWomen.png" alt="Woman"></div>
          <div class="category__badge category__badge_ForWoman">
            <h2>30% OFFER</h2>
            <h3>WOMAN</h3>
          </div>
        </div>
        <div class="category__banner category__banner_Accesories">
          <div class="category__img"><img src="img/categoryAccesories.png" alt="Accesories"></div>
          <div class="category__badge category__badge_Accesories">
            <h2>LUXIROUS & TRENDY</h2>
            <h3>ACCESSORIES</h3>
          </div>
        </div>
        <div class="category__banner category__banner_ForKids">
          <div class="category__img"><img src="img/categoryForKids.png" alt="For Kids"></div>
          <div class="category__badge category__badge_ForKids">
            <h2>NEW ARRIVALS</h2>
            <h3>FOR KIDS</h3>
          </div>
        </div>
      </section>
      <section class="product">
        <h3 class="product__header product__header_1">Fetured Items</h3>
        <h4 class="product__header product__header_2">Shop for items based on what we featured in this week</h4>
        <div class="productSet">
          <!-- Вставляем из main.js карточки товаров-->
        </div><a class="button button_browseAll" href="##"><span class="button__txt_browseAll">Browse All Product</span><span class="fa fa-long-arrow-right button__txt_arrow"></span></a>
      </section>
      <section class="feature clearfix"><a class="feature__img" href="#"><img src="img/featureImg.png" alt="feature image"></a><a class="feature__badge" href="##">
          <h2 class="feature__badge_1">30% <span class="feature__badge_red">OFFER</span></h2>
          <h3 class="feature__badge_2">FOR WOMEN</h3></a>
        <ul class="feature__items">
          <li class="clearfix"><a href="###">
              <div class="feature__itemsPic"><img src="img/listImg_1.png" alt="Free Delivery"></div>
              <ul class="feature__itemsDescr">
                <li>Free Delivery</li>
                <li>Worldwide el very on all. Authorit tively morph next-generation innovation with extensive models.</li>
              </ul></a></li>
          <li class="clearfix"><a href="###">
              <div class="feature__itemsPic"><img src="img/listImg_2.png" alt="Sales &amp; discounts"></div>
              <ul class="feature__itemsDescr">
                <li>Sales & discounts</li>
                <li>Worldwide el very on all. Authorit tively morph next-generation innovation with extensive models.</li>
              </ul></a></li>
          <li class="clearfix"><a href="###">
              <div class="feature__itemsPic"><img src="img/listImg_3.png" alt="Quality assurance"></div>
              <ul class="feature__itemsDescr">
                <li>Quality assurance</li>
                <li>Worldwide delivery on all. Authorit tively morph next-generation innovation with extensive models.</li>
              </ul></a></li>
        </ul>
      </section>
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
                <li><a class="bottomMenu__ref" href="##">Terms & Condition</a></li>
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
          <h2>&copy; Brand All Rights Reserved</h2>
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