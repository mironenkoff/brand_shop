<?php 
    include '../my_php/views/modules/_begining.php';
    include '../my_php/views/modules/_header.php';
    include '../my_php/views/modules/_nav.php';
    include '../my_php/views/modules/_newArrivals.php';
?>
<?php // print_r( $_SESSION[ 'cart' ] ); ?>
<?php // print_r( $_SESSION[ 'products' ] ); ?>
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
            <?php
                $arr = $_SESSION[ 'cart' ];
            ?>
            <?php for ($i = 0; $i < count( $arr ); $i++ ): ?>
                <tr>
                    <td>
                        <?php echo $arr[ $i ][ 'product_name' ]; ?>
                    </td>
                    <td>
                        <?php echo $arr[ $i ][ 'product_price' ]; ?>
                    </td>
                    <td>
                        <?php echo $arr[ $i ][ 'quantity' ]; ?>
                    </td>
                    <td>
                        <?php echo $arr[ $i ][ 'shipping' ]; ?>
                    </td>
                    <td>
                        <?php echo $arr[ $i ][ 'subtotal' ]; ?>
                    </td>
                    <td>
                        <?php echo $arr[ $i ][ 'action' ]; ?>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>       
</div>

<a id="clearCart" href="?action=clearCart">
    CLEAR SHOPPING CART
</a>
<a id="continueShopping" href="index.php">
    CONTINUE SHOPPING
</a>
<form class="checkOutForm clearfix" action="index.php" method="post" name="checkout">
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
    <button class="button" name="action" value="checkout">PROCEED TO CHECKOUT</button>
  </div>
</form>

<?php
    include '../my_php/views/modules/_footer.php';
    include '../my_php/views/modules/_ending.php';
?>

