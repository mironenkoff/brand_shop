<?php 
    include '../my_php/views/modules/_begining.php';
    include '../my_php/views/modules/_header.php';
    include '../my_php/views/modules/_nav.php';
?>

<a class="newArrivals" href="##">
        <h2 class="newArrivals__title">NEW ARRIVALS</h2>
        <h3 class="newArrivals__path">HOME/MAN/<span class="newArrivals__path newArrivals__path_red">NEW ARRIVALS</span></h3>
</a>
<div class="cartContent">
    
</div>
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

<?php
    include '../my_php/views/modules/_footer.php';
    include '../my_php/views/modules/_ending.php';
?>

<!--  <head>
    <title>Shopping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="styles/mystyle.css" rel="stylesheet" type="text/css">
    <link href="img/BranD_logo.png" rel="icon" type="image/x-icon">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="js/cart.js" defer></script>
  </head>-->
