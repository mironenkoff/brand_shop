<?php 
    include '../my_php/views/modules/_begining.php';
    include '../my_php/views/modules/_header.php';
    include '../my_php/views/modules/_nav.php';
//    print_r($_REQUEST);
?>

<form action="index.php" class="login clearfix" name="login">
    
    <h3>
       <?php // print_r($_REQUEST); ?>
        <?php // print_r($_SESSION); ?>
        <?php // print_r($user); ?>
    </h3>
    <h3>
        WELCOME, <?php echo $user[ nickname ] ?>!
    </h3>
    
    <a id="forgotPassord" href="?action=editProfile">
        Edit your profile.
    </a>
</form>

<?php
    include '../my_php/views/modules/_footer.php';
    include '../my_php/views/modules/_ending.php';
?>

