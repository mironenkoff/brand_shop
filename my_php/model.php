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
            . ' brand.product_images.images_path'
            . ' FROM brand.products'
            . ' INNER JOIN brand.product_images'
            . ' ON brand.products.product_ID = brand.product_images.product_ID'
            . ' INNER JOIN brand.brands'
            . ' ON brand.products.brand_ID = brand.brands.brand_ID'
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
            createSinglePage( $db, $_GET[ 'id' ] );
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

//            default:
//                break;
        }
    }
function createSinglePage( $db, $id ) {
    include '../my_php/views/productView.php';
    
    return;
}
