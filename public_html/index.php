<?php

require_once '../my_php/config.php';
require '../my_php/model.php';

$db = dbConnect( $dsn, $user, $password );

$selector = 1;
//include '../my_php/views/view.php';
include '../my_php/views/modules/beginning.php';
switch ($selector) {
    case 0:
        include '../my_php/views/modules/header.php';
        include '../my_php/views/modules/nav.php';
        include '../my_php/views/modules/slider.php';
        include '../my_php/views/modules/category.php';
        include '../my_php/views/modules/productSet.php';
        include '../my_php/views/modules/feature.php';
        include '../my_php/views/modules/footer.php';

        break;
    case 1:
        include '../my_php/views/modules/header.php';
        include '../my_php/views/modules/nav.php';
        include '../my_php/views/modules/breadCrumbs.php';
        include '../my_php/views/modules/imageSlide.php';
        include '../my_php/views/modules/productDescription.php';
        include '../my_php/views/modules/youMayLikeAlso.php';
        include '../my_php/views/modules/footer.php';

        break;

    default:
        include '../my_php/views/modules/header.php';
        include '../my_php/views/modules/nav.php';
        include '../my_php/views/modules/slider.php';
        include '../my_php/views/modules/category.php';
        include '../my_php/views/modules/productSet.php';
        include '../my_php/views/modules/feature.php';
        include '../my_php/views/modules/footer.php';
        
        break;
}
include '../my_php/views/modules/ending.php';
