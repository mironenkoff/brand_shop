<?php 
    include '../my_php/views/modules/_begining.php';
    include '../my_php/views/modules/_header.php';
    include '../my_php/views/modules/_nav.php';
//    print_r($_REQUEST);
?>

<form action="index.php" class="login clearfix" name="login">
    <h3>
        YOUR REGISRATION INFO:
    </h3>
    YOUR NAME<br>
    <input type="text" name="nickname">
    <br>
    EMAIL ADDRESS<br>
    <input type="email" name="email">
    <br>
    PASSWORD<br>
    <input type="password" name="password">
    <button name="action" value="register">REGISTER</button>
    
</form>

<?php
    include '../my_php/views/modules/_footer.php';
    include '../my_php/views/modules/_ending.php';
?>

