<?php

function doFeedbackAction( $db ) {
    if ( !isset( $_REQUEST[ 'action' ] ) ) {
//        var_dump($_REQUEST);
        include '../my_php/views/mainView.php';
        return;
    }
        
    switch ( $_REQUEST[ 'action' ] ) {
        case 'goToProduct':
            if (!isset( $_REQUEST[ 'id' ] )) {
                break;
            }
//                $params = empty( $_SESSION[ 'username' ] ) ? [ 'message', 'username' ] : [ 'message' ];
//                if ( !arrayHasValues( array_keys( $_POST ), $params ) ) {
//                    return;
//                }
//                createComment($db, $_POST[ 'message' ], $_SESSION[ 'username' ] ?? $_POST[ 'username' ]);
//            var_dump($_GET['products']);
            createSinglePage( $db, $_GET[ 'id' ] );
            break;
        case 'openCart':
//            if (!isset( $_REQUEST[ 'id' ] )) {
//                break;
//            }
//                $params = empty( $_SESSION[ 'username' ] ) ? [ 'message', 'username' ] : [ 'message' ];
//                if ( !arrayHasValues( array_keys( $_POST ), $params ) ) {
//                    return;
//                }
            
            include 'shoppingCart.php';
            break;
        case 'addToCart':
            if (!isset( $_REQUEST[ 'id' ] )) {
                break;
            }
            $id = $_REQUEST[ 'id' ];
            $user = $_SESSION[ 'user' ] ? $_SESSION[ 'user' ] : 'guest';
            $searchValue = array_search( $id, array_column( $_SESSION[ 'cart' ], 'id' ) );
//            var_dump($searchValue);
//            $_SESSION[ 'cart' ] = [];
            if ( $searchValue === FALSE ) {
                $key = array_search( $id, array_column( $_SESSION[ 'products' ], 'product_ID' ) );
                $name = $_SESSION[ 'products' ][ $key ][ 'product_name' ];
                $prise = $_SESSION[ 'products' ][ $key ][ 'product_price' ];
                
                $_SESSION[ 'cart' ][] = [
                    'user'=>$user,
                    'id'=>$id,
                    'product_name'=>$name,
                    'product_price'=>$prise,
                    'quantity'=>1,
                    'shipping'=>'free',
                    'subtotal'=>$prise,
                    'action' => '<a class="delItem" href=?action=deleteItem&amp;id='
                        . $id
                        . '><i class="delIcon fa fa-times-circle"></i></a>'
                    ];
//                print_r($_REQUEST['id']);
//                print_r( $_SESSION[ 'cart' ] );
            } else {
                increaseQuantity($searchValue);
//                print_r($_SESSION['cart']);
            }
//                $params = empty( $_SESSION[ 'username' ] ) ? [ 'message', 'username' ] : [ 'message' ];
//                if ( !arrayHasValues( array_keys( $_POST ), $params ) ) {
//                    return;
//                }
//                createComment($db, $_POST[ 'message' ], $_SESSION[ 'username' ] ?? $_POST[ 'username' ]);
//            var_dump($_GET['products']);
//            add( $db, $_GET[ 'id' ] );
            include '../my_php/views/mainView.php';
            break;
        case 'deleteItem':
            $id = $_REQUEST[ 'id' ];
            if ( !$id ) {
                break;
            }
            $key = array_search( $id, array_column( $_SESSION[ 'cart' ], 'id' ) );
//            print_r(array_column( $_SESSION[ 'cart' ], 'id' ));
//            var_dump($key);
//            var_dump($id);
            unset( $_SESSION[ 'cart' ][ $key ] );
            $_SESSION[ 'cart' ] = array_values( $_SESSION[ 'cart' ] );
            include 'shoppingCart.php';
            break;
        case 'clearCart':
            $_SESSION[ 'cart' ] = [];
            include 'shoppingCart.php';
            break;
//        case 'update':
//            if ( !arrayHasValues(array_keys( $_POST ), [ 'message', 'id' ] ) ) {
//                return;
//            }
//            updateComment($db, $_POST[ 'id' ], $_POST[ 'message' ]);
//            break;
//        case 'delete':
//            if ( empty( $_GET [ 'id' ] ) ) {
//                return;
//            }
//            deleteComment($db, $_GET[ 'id' ] );
//            break;
        case 'checkout':
//            if (!isset( $_REQUEST[ 'id' ] )) {
//                break;
//            }
//                $params = empty( $_SESSION[ 'username' ] ) ? [ 'message', 'username' ] : [ 'message' ];
//                if ( !arrayHasValues( array_keys( $_POST ), $params ) ) {
//                    return;
//                }
            
            include 'checkOut.php';
            break;
        case 'toLogIn':
//            if (!isset( $_REQUEST[ 'id' ] )) {
//                break;
//            }
//                $params = empty( $_SESSION[ 'username' ] ) ? [ 'message', 'username' ] : [ 'message' ];
//                if ( !arrayHasValues( array_keys( $_POST ), $params ) ) {
//                    return;
//                }
            
            include 'login.php';
            break;
        case 'logIn':
            if ( empty( $_REQUEST[ 'email' ] ) || empty( $_REQUEST[ 'password' ] ) ) {
                echo '<p class="loginAlert"> You must type your email and password! </p>';
                include 'login.php';
                break;
            }
            if ( $user = getUser( $db, $_REQUEST[ 'email' ], $_REQUEST[ 'password' ] ) ) {
                
                include 'profile.php';
                return $user;
                
            } else {
                echo '<p class="loginAlert"> Your email or password is incorrect! </p>';
                include 'profile.php';
            }
            
            break;
        default:
            include '../my_php/views/mainView.php';
            break;
        }
    }
function createSinglePage( $db, $id ) {
    $product = getProduct( $db, $id );
    $imgPath = $product[ "images_path" ];
    $productName = $product[ "product_name" ];
    $price = $product[ "product_price" ];
    $brand = $product[ "brand_name" ];
    $categoryName = $product[ "category_name2" ];
    $material = $product[ "material_name" ];
    $designer = $product[ "designer_name" ];
    $descr = $product[ "product_descript" ];
    
    include '../my_php/views/productView.php';
    
    return;
}
function prevID( $db, $id ) {
    $arr = getIDs( $db );
    $key = array_search( $id, $arr );
    
    if ( $key == 0 ) {
        return end( $arr );
    } else {
        return $arr[ --$key ];
    }
}

function nextID( $db, $id ) {
    $arr = getIDs( $db );
    $key = array_search( $id, $arr );
//    print_r($arr);
//    var_dump($key);
    end($arr);
    if ( $key == key( $arr ) ) {
        return $arr[ 0 ];
    } else {
        return $arr[ ++$key ];
    }
}


function increaseQuantity( $id ) {
    $_SESSION[ 'cart' ][$id]['quantity']++;
    getSubtotal( $id );
    return;
}

function getSubtotal( $id ) {
    $_SESSION[ 'cart' ][ $id ][ 'subtotal' ] = $_SESSION[ 'cart' ][ $id ][ 'quantity' ] * $_SESSION[ 'cart' ][ $id ][ 'product_price' ];
    return;
}
