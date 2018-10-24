<?php 
    include '../my_php/views/modules/_begining.php';
    include '../my_php/views/modules/_header.php';
    include '../my_php/views/modules/_nav.php';
    include '../my_php/views/modules/_newArrivals.php';
//    print_r($_REQUEST);
?>
<ul class="chekOutItems">
    <li>
        01. SHIPPING ADRESS
        <form action="index.php" class="clearfix">
            <fieldset class="register">
                <h3>
                    CHECK AS A GUEST OR REGISTER
                </h3>
                <h5>
                    Register with us for future convenience
                </h5>
                <input type="radio" name="register" value="no">
                CHECKOUT AS GUEST<br>
                <input type="radio" checked name="register" value="yes">
                REGISTER
                <h3>
                    REGISTER AND SAVE TIME!
                </h3>
                <h5>
                    Register with us for future convenience
                </h5>
                <ul>
                    <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        Fast and easy checkout
                    </li>
                    <li>
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        Easy access to your order history and status
                    </li>
                </ul>
                <button>CONTINUE</button>
            </fieldset>
            <fieldset class="login">
                <h3>
                    ALREADY REGISTERED?
                </h3>
                <h5>
                    Please log in below
                </h5>
                EMAIL ADDRESS <span>&ast;</span><br>
                <input type="email" name="email">
                <br>
                PASSWORD<br>
                <input type="password" name="password">
                <h5 id="requiredFields">
                    <span>&ast;</span>
                     Required Fileds
                </h5>
                <button name="action" value="logIn">LOGIN</button>
                <a id="forgotPassord" href="##">
                    Forgot Password?
                </a>
            </fieldset>
            
        </form>
    </li>
    <li>
        02. BILLING INFORMATION
    </li>
    <li>
        03. SHIPPING INFORMATION
    </li>
    <li>
        04. SHIPPING METHOD
    </li>
    <li>
        05. PAYMENT METHOD
    </li>
    <li>
        06. ORDER REVIEW
    </li>
</ul>


<?php
    include '../my_php/views/modules/_footer.php';
    include '../my_php/views/modules/_ending.php';
?>

