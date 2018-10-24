<?php

function dbConnect($dsn, $user, $password) {
    return new PDO( $dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] );
}

function getCategories( $db ) {
//    var_dump( $tableName );
//    var_dump( $fieldName );
//    var_dump( $db );
//    $sql = 'USE brand;';
    
//    $sql = 'SELECT :fieldName FROM :tableName;';
    $sql = 'SELECT category_name FROM categories;';
    $stmnt = $db->prepare( $sql );
    
//    $stmnt->bindParam( ':fieldName', $fieldName );
//    $bind1 =  $stmnt->bindValue( ':fieldName', $fieldName );
//    var_dump( $bind1 );
//    $stmnt->bindParam( ':tableName', $tableName );
//    $bind2 = $stmnt->bindValue( ':tableName', $tableName );
//    var_dump($bind2);
//    $stmnt->execute();
    $stmnt->execute();
//    var_dump($exec);
    
//    var_dump( $stmnt->errorInfo() );

    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 0 );
//    $res = $stmnt->fetchAll();
//    print_r($res);
    return $res;
}
function getSubCategories( $db, $category) {

    $sql = 'SELECT brand.categories.category_name,'
            . ' brand.subcategories.subcategory_name'
            . ' FROM brand.subcategories'
            . ' INNER JOIN brand.categories'
            . ' ON brand.subcategories.category_ID = brand.categories.category_ID'
            . ' WHERE brand.categories.category_name = "'
            . $category . '"';
//    var_dump($sql);
    $stmnt = $db->prepare( $sql );
    
//    $stmnt->bindParam( ':fieldName', $fieldName );
//    $bind1 =  $stmnt->bindValue( ':fieldName', $fieldName );
//    var_dump( $bind1 );
//    $stmnt->bindParam( ':tableName', $tableName );
//    $bind2 = $stmnt->bindValue( ':tableName', $tableName );
//    var_dump($bind2);
//    $stmnt->execute();
    $stmnt->execute();
//    var_dump($exec);
    
//    var_dump( $stmnt->errorInfo() );

    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 1 );
//    $res = $stmnt->fetchAll();
//    print_r($res);
    return $res;
}

function getProduct( $db, $productID ) {

    $sql = 'SELECT brand.brands.brand_name,'
            . ' brand.products.product_name,'
            . ' brand.products.product_price,'
            . ' brand.products.product_descript,'
            . ' brand.products.color,'
            . ' brand.products.size,'
            . ' brand.product_images.images_path,'
            . ' brand.categories.category_name2,'
            . ' brand.material.material_name,'
            . ' brand.designers.designer_name'
            . ' FROM brand.products'
            . ' INNER JOIN brand.product_images'
            . ' ON brand.products.product_ID = brand.product_images.product_ID'
            . ' INNER JOIN brand.brands'
            . ' ON brand.products.brand_ID = brand.brands.brand_ID'
            . ' INNER JOIN brand.subcategories'
            . ' ON brand.products.subcategory_ID = brand.subcategories.subcategory_ID'
            . ' INNER JOIN brand.categories'
            . ' ON brand.subcategories.category_ID = brand.categories.category_ID'
//            . ' UNION brand.material'
//            . ' INNER JOIN brand.material'
//            . ' ON brand.products.material_ID = brand.material.material_ID'
            . ' LEFT JOIN brand.material'
            . ' ON brand.products.material_ID = brand.material.material_ID'
//            . ' UNION brand.designers'
            . ' LEFT JOIN brand.designers'
            . ' ON brand.products.designer_ID = brand.designers.designer_ID'
            . ' WHERE brand.products.product_ID = "'
            . $productID . '"';

//    var_dump($sql);
    $stmnt = $db->prepare( $sql );
    
    $stmnt->execute();
//    var_dump($exec);
    
//    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 1 );
//    $res = $stmnt->fetchAll();
    $res = $stmnt->fetch( PDO::FETCH_ASSOC );
//    print_r($res);
    return $res;
}

function getProducts( $db ) {

    $sql = 'SELECT brand.products.product_ID,'
            . ' brand.brands.brand_name,'
            . ' brand.products.product_name,'
            . ' brand.products.product_price,'
            . ' brand.product_images.images_path'
            . ' FROM brand.products'
            . ' INNER JOIN brand.product_images'
            . ' ON brand.products.product_ID = brand.product_images.product_ID'
            . ' INNER JOIN brand.brands'
            . ' ON brand.products.brand_ID = brand.brands.brand_ID';

//    var_dump($sql);
    $stmnt = $db->prepare( $sql );
    
    $stmnt->execute();
//    var_dump($exec);
    
//    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 1 );
//    $res = $stmnt->fetchAll();
    $res = $stmnt->fetchAll( PDO::FETCH_ASSOC );
//    print_r($res);
    return $res;
}
function doFeedbackAction( $db ) {
    if ( !isset( $_REQUEST[ 'action' ] ) ) {
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
//            if (!isset( $_REQUEST[ 'id' ] )) {
//                break;
//            }
//                $params = empty( $_SESSION[ 'username' ] ) ? [ 'message', 'username' ] : [ 'message' ];
//                if ( !arrayHasValues( array_keys( $_POST ), $params ) ) {
//                    return;
//                }
            
            include 'profile.php';
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

function getIDs( $db ) {
    $sql = 'SELECT brand.products.product_ID FROM brand.products ORDER BY product_ID ASC;';

//    var_dump($sql);
    $stmnt = $db->prepare( $sql );
    
    $stmnt->execute();
//    var_dump($exec);
    
    $res = $stmnt->fetchAll( PDO::FETCH_COLUMN, 0 );
//    $res = $stmnt->fetchAll();
//    $res = $stmnt->fetchAll( PDO::FETCH_ASSOC );
//    print_r($res);
    return $res;
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
