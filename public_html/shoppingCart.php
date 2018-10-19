<?php 
    include '../my_php/views/modules/_begining.php';
    include '../my_php/views/modules/_header.php';
    include '../my_php/views/modules/_nav.php';
    include '../my_php/views/modules/_newArrivals.php';
?>
<?php print_r( $_SESSION[ 'cart' ] ); ?>
<div class="cartContent">
    <table class="cartTable">
        <thead class="cartTable__head">
            <tr>
                <td>PRODUCT DETAILS</td>
                <td>UNIT PRICE</td>
                <td>QUANTITY</td>
                <td>SHIPPING</td>
                <td>SUBTOTAL</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody class="cartTable__body">
            <tr>
                <td>
                    jjj
                </td>
            </tr>
        </tbody>
    </table>       
</div>

<button id="clearCart">
    CLEAR SHOPPING CART
</button>
<a id="continueShopping" href="index.php">
    CONTINUE SHOPPING
</a>
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

